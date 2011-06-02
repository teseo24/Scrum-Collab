<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Task Board</title>
        <link rel="stylesheet" href="<?php echo base_url();?>css/global.css" media="screen" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.flip-compressed.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.lightbox-0.5.pack"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.reflection.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.vanilla.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.task').click(function() {
                    alert('Adding a task.');
                });
            });
        </script>
    </head>

    <body>
        <div id="container">
                <!--<img src="images/logo.jpg" alt="Task Board logo :: Postit pad with Task Board written on it" />-->
            <table id="taskboard">
                <tr>
                    <th><div class="task">Story <img src="<?php echo base_url();?>images/add.png" alt="Add" /></div> </th>
                    <th>In Progress </th>
                    <th>To Do </th>
                    <th>To Verify </th>
                    <th>Done </th>
                </tr>
                <tr>
                    <td>
                        <ul class="notes">
                            <li class="unflipped">
                                <span class="toolbar">
                                    <img src="<?php echo base_url();?>images/edit.png" alt="Edit" />
                                    <img src="<?php echo base_url();?>images/delete.png" alt="Delete" />
                                    <img src="<?php echo base_url();?>images/history.png" alt="History" />
                                    <img src="<?php echo base_url();?>images/info.png" alt="More Information" />
                                    <img src="<?php echo base_url();?>images/flip.png" alt="Turn Over" class="flip" />
                                </span>
				Story 1
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li class="unflipped"> To Do 1</li>
                            <li class="new">To Do 2</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>In Progress 1</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>To Verify 1</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>Done 1</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul class="notes">
                            <li>Story 2</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>To Do 1</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li class="new">In Progress 1</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>To Verify 1</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="notes">
                            <li>Done 1</li>
                            <li>Done 2</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>