<?php

/**
 * Copyright 2021-2022 info@whoaphp.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Whoa\Contracts\Settings\Packages;

use Whoa\Contracts\Settings\SettingsInterface;

/**
 * Provides individual settings for a component.
 *
 * @package Whoa\Contracts
 */
interface OAuthClientSettingsInterface extends SettingsInterface
{
    /** Settings key */
    public const KEY_PROVIDER_IDENTIFIER = 0;

    /** Settings key */
    public const KEY_PROVIDER_NAME = self::KEY_PROVIDER_IDENTIFIER + 1;

    /** Settings key */
    public const KEY_CLIENT_IDENTIFIER = self::KEY_PROVIDER_NAME + 1;

    /** Settings key */
    public const KEY_TENANT_IDENTIFIER = self::KEY_CLIENT_IDENTIFIER + 1;

    /** Settings key */
    public const KEY_DISCOVERY_DOCUMENT_URI = self::KEY_TENANT_IDENTIFIER + 1;

    /** Settings key */
    public const KEY_JWK_SET_URI_KEY = self::KEY_DISCOVERY_DOCUMENT_URI + 1;

    /** Settings key */
    public const KEY_LAST = self::KEY_JWK_SET_URI_KEY;
}
