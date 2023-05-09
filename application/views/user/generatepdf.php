<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Your Diet Plan</title>    
</head>
<style>
    @page { margin: 0px; }
    .header{
        background: #343f56;
        padding: 20px;
        text-align: center;
    }
    .header .logo{
        width: 10%;
        margin:0 auto;
    }
    .header .logo img{
        width: 100%;
    }
    h2{
        font-size: 25px;
        font-weight: bold;
        color: #343f56;
    }
    label{
        color:#fe8543;
    }
    .section{
        display:flex;
        flex-wrap: wrap;
        padding:0 15px; 
    }    
    table{
        width:730px;  
        border:1px solid #cecece;       
        margin: 0 auto;   
    }
    table tr{
        border: none
    }
    table tr th{
        background-color: #fe8543;
        color: #fff;   padding: 5px;         
    }
    table tr td{
        background: #fefefe;
        padding: 5px;
        text-align: center;
    }
    table tr:nth-child(even) td{
        background: #efefef;
    }
    .footer{
        background: #343f56;
        padding: 10px;
        text-align: center;
        color: #cecece;
        width:100%;
    }
</style>
<body>
    
    <div class="header">
        <div class="logo"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></div>
    </div>
    <div class="section">
        <h2>Request Details</h2>
        <?php foreach($response as $q): ?>
            <table>
                <tr>
                    <th>Age:</th>
                    <th>Height:</th>
                    <th>Weight:</th>
                    <th>Physical Activity Level:</th>
                </tr>
                <tr>
                    <td><?php echo  $q->age; ?></td>
                    <td><?php echo $q->height; ?></td>
                    <td><?php echo $q->weight; ?></td>
                    <td><?php echo $q->activity_level; ?></td>
                </tr>
                <tr>
                    <th>Health Status:</th>
                    <th>Food Preferences:</th>
                    <th>Cooking Skills:</th>
                    <th>Budget:</th>
                </tr>
                <tr>
                    <td><?php echo $q->health_status; ?></td>
                    <td><?php echo $q->food_preferences; ?></td>
                    <td><?php echo $q->cooking_skills; ?></td>
                    <td><?php echo $q->budget; ?></td>
                </tr>
            </table>
                                            
            <?php echo $q->response; ?>
            <div class="clearfix"></div>
        </div>
        <?php endforeach;?>
    </div>
    
    <div class="footer">
        <address>© 2023 Keto & Diet - All Rights Reserved</address>
    </div>
</body>
</html>