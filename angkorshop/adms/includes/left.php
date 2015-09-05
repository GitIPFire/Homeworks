<div class="left-container">
                <div class="left-bottom" id="left">
                	<div class="tuggle"><img src="<?php echo PATHS;?>images/commons/toggle.png" title="Minimize" alt="Minimize" id="tug" /></div>
                    <div class="menu">
                    	<nav>
                        
                        	<div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Products</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.PRODUCTS;?>"><p class="<?php echo(INDEX=='1')?'act':'';?>">Add New Product</p></a>
                                    <a href="<?php echo SITE.CATEGORIES;?>"><p class="<?php echo(INDEX=='2')?'act':'';?>">Add New Category</p></a>
                                </div>
                            </div><!--menu_item-->
                            
                            <div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Oders</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.ORDERS;?>"><p class="<?php echo(INDEX=='3')?'act':'';?>">Order</p></a>
                                    
                                </div>
                            </div><!--menu_item-->
                            
                            <div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Costomers</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.CUSTOMERS;?>"><p class="<?php echo(INDEX=='5')?'act':'';?>">Add New Customer</p></a>
                                </div>
                            </div><!--menu_item-->
                            
                            <div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Users</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.USERS;?>"><p class="<?php echo(INDEX=='6')?'act':'';?>">Add New User</p></a>
                                </div>
                            </div><!--menu_item-->
                            
                            <div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Permissions</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.PERMISSIONS;?>"><p class="<?php echo(INDEX=='7')?'act':'';?>">Set Permission</p></a>
                                </div>
                            </div><!--menu_item-->
                            
                            <div class="menu_item">
                            	<div class="menu_parent">
                                	<p>Settings</p>
                                </div>
                                <div class="child">
                                	<a href="<?php echo SITE.HELP;?>"><p class="<?php echo(INDEX=='8')?'act':'';?>">Help?</p></a>
                                    <a href="<?php echo SITE.LOGOUT;?>"><p>Log Out</p></a>
                                </div>
                            </div><!--menu_item-->
                            
                        </nav>
                    </div>
                </div>
                
            </div><!--left-container-->