<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-home"></span></a>
            <div class="visible-xs navbar-brand" style="padding-left:0"><strong>SIS</strong>e<strong>k</strong>ol<strong>a</strong>h</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php

                function navbar($structure) {
                    foreach ($structure as $value) {
                        if (! priv('view', $value->id)) {
                            continue;
                        }
                        if (! empty($value->childs)) {
                            echo '<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.var_lang($value->title).' <b class="caret"></b></a>
                                    <ul class="dropdown-menu">';
                            navbar($value->childs);
                            echo '  </ul>
                                </li>';
                        } else {
                            echo '<li><a href="'.structure_url($value).'">'.var_lang($value->title).'</a></li>';
                        }
                    }
                }

                $structure = get_structure('', false);
                navbar($structure);
                ?>
            </ul>

            <div class="nav navbar-nav navbar-right">
                <table width="100%" style="border-collapse:collapse;border:0;padding:0;margin:0;width:100%">
                    <tr>
                        <td><span class="navbar-text">&nbsp;&nbsp;&nbsp;<?php echo $current_user->fullname; ?></span></td>
                        <td><a class="navbar-text" href="<?php echo custom_url('tools'); ?>"><span class="glyphicon glyphicon-th-large"></span></a></td>
                        <td><a class="navbar-text pull-right" href="<?php echo site_url('auth/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout &nbsp;&nbsp;&nbsp;</a></td>
                    </tr>
                </table>
            </div>

            <div class="hidden-xs navbar-brand pull-right" style="padding-left:0"><strong>SIS</strong>e<strong>k</strong>ol<strong>a</strong>h</div>
        </div>
    </div>
</nav>
