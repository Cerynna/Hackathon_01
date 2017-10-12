<!-- display home page -->
<?php
require 'vendor/autoload.php';

use FJA\Request;

$arguments['user'] = ["avatar_url", "html_url", "name", "following_url", "public_repos", "public_gists"];
$arguments['repos'] = ["limit" => "F-3"];
$arguments['gists'] = ["limit" => "D-3"];

$lol = new Request("Cerynna", $arguments);

echo $lol->helloworld();
?>


<!-- Go to update -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="?page=update">
        <i class="large material-icons">mode_edit</i>
    </a>
</div>

<!-- Modal for view more details -->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-header">
        <h4>Détails du compte github de @userName</h4>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
    </div>
    <div class="modal-content">
        <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width">
            <li class="tab"><a href="#test-swipe-1">repos</a></li>
            <li class="tab"><a href="#test-swipe-2">gists</a></li>
        </ul>
        <div id="test-swipe-1" class="col s12 slideDetails">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>@depot1</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>@depot2</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>@depot3</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
        <div id="test-swipe-2" class="col s12 slideDetails">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>@gist1</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>@gist2</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>@gist3</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </div>
</div>