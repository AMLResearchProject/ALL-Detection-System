<?php session_start();

$pageDetails = [
    "PageID" => "Dashboard"
];

include dirname(__FILE__) . '/../Classes/Core/init.php';

include dirname(__FILE__) . '/Server/Classes/core.php';

include dirname(__FILE__) . '/GeniSysAI/Language/Classes/core.php';

include dirname(__FILE__) . '/iotJumpWay/Classes/core.php';
include dirname(__FILE__) . '/iotJumpWay/Classes/devices.php';
include dirname(__FILE__) . '/iotJumpWay/Classes/applications.php';

include dirname(__FILE__) . '/People/Classes/core.php';

$_GeniSysAiUsers->checkSession();
$accessCamera  = $_GeniSys->_confs['tassID'] ? $_iotJumpWayDevices->getDevice($_GeniSys->_helpers->oDecrypt($_GeniSys->_confs['tassID'])) : null;
$nluEngine  = $_GeniSys->_confs['nluID'] ? $_iotJumpWayDevices->getDevice($_GeniSys->_helpers->oDecrypt($_GeniSys->_confs['nluID'])) : null;
$facialAuth  = $_GeniSys->_confs['faID'] ? $_iotJumpWayDevices->getDevice($_GeniSys->_helpers->oDecrypt($_GeniSys->_confs['faID'])) : null;

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META name="robots" content="noindex, nofollow">

        <!-- 
          /*********************************************************
          ** @Project:      GeniSysAI IntelliLan Home Network
          ** @Repository:   Server
          ** @Project:      Server UI
          ** @Github:       https://github.com/GeniSysAI/
          ** 
          ** @Author:       Adam Milton-Barker (AdamMiltonBarker.com)
          ** @Contributors:
          ** @Description:  The GeniSysAI IntelliLan Home Network UI.
          ** License:       MIT License
          **********************************************************/	
        -->

        <title>GeniSysAI IntelliLan Home Network</title>
        <meta name="description" content="The GeniSysAI network is an open source Artificial Intelligence Assistant Network of Computer Vision, Natural Linguistics, Internet of Things devices and applications to create an automated, intelligent smart home.">
        <meta name="author" content="Adam Milton-Barker">

        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/GeniSysAI/Media/CSS/GeniSys.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/vendor/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/vendor/metisMenu/metisMenu.min.css">
        <link type="text/css" rel="stylesheet" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/CSS/sb-admin-2.css">
        <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link type="image/x-icon" rel="icon" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/Images/Site/favicon.png" />
        <link type="image/x-icon" rel="shortcut icon" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/Images/Site/favicon.png" />
        <link type="image/x-icon" rel="apple-touch-icon" href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/Media/Images/Site/favicon.png" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
    
        <div id="wrapper">

            <?php include dirname(__FILE__) . '/Includes/nav.php'; ?>
    
            <div id="page-wrapper" style=" background: none !important;">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">GeniSysAI IntelliLan Home Network Server UI</h1>
                    </div>
                    <div class="col-lg-12"><?php include dirname(__FILE__) . '/Server/Includes/top.php'; ?></div>
                    <div class="col-lg-8">

                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="col-lg-6" style="color: #fff !important;">
            
                                    <?php include dirname(__FILE__) . '/Includes/Weather.php'; ?>                                
                                
                                </div>
                                <div class="col-lg-6">
            
                                    <?php include dirname(__FILE__) . '/Includes/Time.php'; ?>  

                                </div>

                            </div>
                        </div>
                        
                        <?php  include dirname(__FILE__) . '/Includes/Applications.php'; ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-superpowers fa-fw"></i> GeniSysAI IntelliLan Home Network
                                <div class="pull-right">
                                    <div class="btn-group"></div>
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <p>The GeniSysAI IntelliLan Home Network is a network of customizable, open source IoT and Artificial Intelligence devices / applications with a locally hosted, IoT connected local web server & proxy. The <a href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/GeniSysAI/Server">network server</a> provides a locally hosted UI and database for managing the server/network and connected devices.</p>

                                <p>For more info on GeniSysAI and the IntelliLan Home Network check out the <a href="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/GeniSysAI/About">about page</a>.
                            
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-superpowers fa-fw"></i> GeniSysAI Security Cameras
                                <div class="pull-right">
                                    <div class="btn-group"></div>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="col-lg-12">
                                    <?php  include dirname(__FILE__) . '/GeniSysAI/Server-Camera/Includes/Cam.php'; ?>
                                </div>
                            
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        
                        <?php  include dirname(__FILE__) . '/GeniSysAI/Includes/version.php'; ?>
                        <?php  include dirname(__FILE__) . '/GeniSysAI/Language/Includes/console.php'; ?>
                        <?php  include dirname(__FILE__) . '/iotJumpWay/Includes/live.php'; ?>        

                    </div>
                </div>
            </div>
        </div>
        
        <?php  include dirname(__FILE__) . '/Includes/Scripts.php'; ?>

        <script src="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/iotJumpWay/Live/classes/mqttws31.js" type="text/javascript"></script>
        <script src="<?=$_GeniSys->_helpers->oDecrypt($_GeniSys->_confs["domainString"]); ?>/iotJumpWay/Live/classes/iotJumpWay.js" type="text/javascript"></script>
 
    </body>
</html> 



                                
                