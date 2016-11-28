<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="card red summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-inbox fa-4x"></i>
                            <div class="content">
                                <?php
                                    $CountVisit = $Conexion->query("SELECT * FROM count_visit;");
                                    if ($CountVisit->num_rows == 0){
                                        $CountVisit = 0;
                                    } else {
                                        $CountVisit = $CountVisit->num_rows;
                                    }
                                ?>
                                <div class="title"><?php echo $CountVisit; ?></div>
                                <div class="sub-title">Visitantes</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a href="users">
                    <div class="card yellow summary-inline">
                        <div class="card-body">
                            <!-- <i class="icon fa fa-comments fa-4x"></i> -->
                            <i class="icon fa fa-users fa-4x"></i>
                            <div class="content">
                                <?php
                                    $CountUsers = $Conexion->query("SELECT * FROM admin_info;");
                                    if ($CountUsers->num_rows == 0){
                                        $CountUsers = 0;
                                    } else {
                                        $CountUsers = $CountUsers->num_rows;
                                    }
                                ?>
                                <div class="title"><?php echo $CountUsers; ?></div>
                                <div class="sub-title">Usuarios</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a href="articles">
                    <div class="card green summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-tags fa-4x"></i>
                            <div class="content">

                                <?php
                                    $CountArticle = $Conexion->query("SELECT * FROM article;");
                                    if ($CountArticle->num_rows == 0){
                                        $CountArticle = 0;
                                    } else {
                                        $CountArticle = $CountArticle->num_rows;
                                    }
                                ?>

                                <div class="title"><?php echo $CountArticle; ?></div>
                                <div class="sub-title">Artículos</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a href="agents">
                    <div class="card blue summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-user-secret fa-4x"></i>
                            <div class="content">

                            <?php
                                $CountAgent = $Conexion->query("SELECT * FROM agents;");
                                if ($CountAgent->num_rows == 0){
                                    $CountAgent = 0;
                                } else {
                                    $CountAgent = $CountAgent->num_rows;
                                }
                            ?>

                                <div class="title"><?php echo $CountAgent; ?></div>
                                <div class="sub-title">Agentes</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row  no-margin-bottom">
            <div class="col-sm-6 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">12 min ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">15 min ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">2 hour ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">1 day ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#" id="message-load-more">
                                <li class="text-center load-more">
                                    <i class="fa fa-refresh"></i> load more..
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">12 min ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">15 min ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">2 hour ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>
                                    <img src="../img/profile/profile-1.jpg" class="profile-img pull-left">
                                    <div class="message-block">
                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">1 day ago</span>
                                        </div>
                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                    </div>
                                </li>
                            </a>
                            <a href="#" id="message-load-more">
                                <li class="text-center load-more">
                                    <i class="fa fa-refresh"></i> Cargar más...
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        <?php include ("build/modals.php"); ?>
        </div>
    </div>
</div>