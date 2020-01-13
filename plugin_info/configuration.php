<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}
?>
<form class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label class="col-lg-4 control-label">URL de redirection a fournir lors de la création de l'application sur <a href='https://dev.xee.com' target="_blank">https://dev.xee.com</a> :</label>
            <div class="col-lg-8">
            <?php
				echo network::getNetworkAccess('external') . "/plugins/XeeCloud/3rdparty/oauth.php";
//				echo "<br>ou<br>";
//				echo network::getNetworkAccess('external') . "/plugins/XeeCloud/3rparty/oauth.php?apikey=" . config::byKey('api') . "";
			?></div>
        </div>
		<HR>
<!--
        <div class="form-group">
            <label class="col-lg-3 control-label">{{XeeCloud v3}}</label>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{client_id}}</label>
            <div class="col-lg-3">
                <input class="configKey form-control" data-l1key="XeeCloudClientID" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{client_secret}}</label>
            <div class="col-lg-3">
                <input class="configKey form-control" data-l1key="XeeCloudClientIDSecret" />
            </div>
        </div>
		<HR>
-->
        <div class="form-group">
            <label class="col-lg-3 control-label">{{XeeCloud v4}}</label>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{ID}}</label>
            <div class="col-lg-5">
                <input class="configKey form-control" data-l1key="XeeCloudAPIv4ClientID" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Key}}</label>
            <div class="col-lg-5">
                <input class="configKey form-control" data-l1key="XeeCloudAPIv4ClientIDKey" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">{{Secret}}</label>
            <div class="col-lg-5">
                <input class="configKey form-control" data-l1key="XeeCloudAPIv4ClientIDSecret" />
            </div>
        </div>
	</fieldset>
</form>

