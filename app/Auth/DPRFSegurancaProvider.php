<?php
/**
 * Created by PhpStorm.
 * User: thyago
 * Date: 04/04/16
 * Time: 11:19
 */

namespace App\Auth;


use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use PRF\DPRFSeguranca;
use PRF\RH;

class DPRFSegurancaProvider implements UserProvider
{

    private $rh;

    /**
     * DPRFSegurancaProvider constructor.
     */
    public function __construct(RH $rh)
    {
        $this->rh = $rh;
    }

    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {

        try {
            $usuario = Cache::remember('userById_' . $identifier, 60,
                function () use ($identifier) {
                    return $this->rh->getByCPF($identifier)[0];
                }
            );

//            hack para identificar o usuário pelo CPF
            $usuario['id'] = $usuario['cpf'];

            return new GenericUser($usuario);
        }
        catch (\Exception $e) {
            throw new \Exception("Problemas ao acessar o DPRFSegurança " . $e->getMessage());
        }

    }

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed $identifier
     * @param  string $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        // TODO
        // Se algum dia sair o login único na PRF, isso vai ser útil
    }

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  string $token
     * @return void
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        return $this->retrieveById($credentials['cpf']);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  array $credentials
     * @return bool
     * @throws \Exception
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        try {
            $seguranca = new DPRFSeguranca(config("PRF.siglaSistema"), config("PRF.producao"));
            $usuario = $seguranca->login($credentials["cpf"],$credentials["senha"]);
            Session::put('permissoes', $usuario['controlePermissoes']['siglasDasFuncionalidades']);
            return true;
        } catch (\Exception $e) {
            throw new \Exception("Usuário ou Senha Inválidos.");
        }
    }
}