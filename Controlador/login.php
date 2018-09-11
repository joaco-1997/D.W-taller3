<?php
        session_start();
        if($_POST['Iniciar']=='Login'){
            $nom=$_POST["nom"];
            $cla=$_POST["cla"];
            
            include '../Modelos/consul.php';
            $rob=new consul();
            $iniciar=$rob->login($nom,$cla);
            if(sizeof($iniciar)>0){
                foreach ($iniciar as $key => $valueus) {
                    $_SESSION['usu']=$valueus[1];
                }
                header("location:../Vistas/prin.php");
            }else{
                $resp= '<b><font color=red>Contrasena  o usuario Incorrecta</font></b>';
                header("location:../Vistas/index.php?resp=".urlencode($resp));
            }
            
        }
        ?>