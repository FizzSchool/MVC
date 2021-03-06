<?php
    include "incfiles/header.php";
    include "incfiles/menu_left.php";
?>

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="index.php?controller=product&action=show&page=1">List Products</a> <span class="divider">></span></li>
            <li class="active">Edit</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Products Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form action="index.php?controller=product&action=edited_product&id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data" method="POST">
                    	<div class="row-form">
                            <div class="span3">Product Name:</div>
                             <?php if(isset($error['product_name'])) echo $error['product_name']; ?>
                            <div class="span9"><input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Price:</div>
                             <?php if(isset($error['price'])) echo $error['price']; ?>
                            <div class="span9"><input type="text" name="price" value="<?php echo $product['price']; ?>"></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Description:</div>
                             <?php if(isset($error['details'])) echo $error['details']; ?>
                            <div class="span9"><textarea name="details"><?php echo $product['details']; ?></textarea></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Upload Image:</div>
                             <?php if(isset($error['avatar'])) echo $error['avatar']; ?>
                            <div class="span9">
                            <img src="<?php echo $product['avatar'];?>" height="100" width="100" ><br/>
                            <input type="file" name="avatar">
                            </div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                             <?php if(isset($error['activate'])) echo $error['activate']; ?>
                            <div class="span9">
                                <select name="activate">
                                    <option value="0">choose a option...</option>
                                    <option value="Activate" <?php if($product['activate']=='Activate'){  ?> selected="" <?php }; ?> >Activate</option>
                                    <option value="Deactivate" <?php if($product['activate']=='Deactivate'){ ; ?> selected="" <?php }; ?> >Deactivate</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit" name="update">Update</button>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>

</body>
</html>