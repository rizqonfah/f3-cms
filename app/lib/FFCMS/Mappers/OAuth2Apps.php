<?php

namespace FFCMS\Mappers;

/**
 * OAuth2 Apps Mapper Class.
 *
 * @author Vijay Mahrra <vijay@yoyo.org>
 * @copyright (c) Copyright 2016 Vijay Mahrra
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 *
 * @property int    $id
 * @property string $created
 * @property string $users_uuid
 * @property string $client_id
 * @property string $client_secret
 * @property string $name
 * @property string $logo_url
 * @property string $description
 * @property string $scope
 * @property string $callback_uri
 * @property string $redirect_uris
 * @property string $status
 */
class OAuth2Apps extends Mapper
{
    protected $table = 'oauth2_apps';

    /**
     * Fields and their visibility to clients, boolean or string of visible field name
     *
     * @var array $fieldsVisible
     */
    public $fieldsVisible = [
        'users_uuid'    => 'user_id',
        'client_id'     => 'id',
    ];

    /**
     * Filter rules for fields
     *
     * @var array $filterRules
     * @link https://github.com/Wixel/GUMP
     */
    public $filterRules = [
        'created'       => 'trim|sanitize_string',
        'users_uuid'    => 'trim|sanitize_string|lower',
        'client_id'     => 'trim|sanitize_string|lower',
        'client_secret' => 'trim|sanitize_string|lower',
        'name'          => 'trim|sanitize_string',
        'logo_url'      => 'trim|urldecode',
        'description'   => 'trim|sanitize_string',
        'scope'         => 'trim|sanitize_string',
        'callback_uri'  => 'trim|urldecode',
        'redirect_uris' => 'trim|urldecode',
        'status'        => 'trim|sanitize_string',
    ];

    /**
     * Validation rules for fields
     *
     * @var array $validationRules
     * @link https://github.com/Wixel/GUMP
     */
    public $validationRules = [
        'users_uuid'    => 'alpha_dash',
        'client_id'     => 'alpha_dash',
        'client_secret' => 'alpha_dash',
        'logo_url'      => 'valid_url',
        'callback_uri'  => 'valid_url',
    ];
}
