<html><li class="fileds">
						<div class="name_fileds">
							<label>Select Product Category</label>

                            <?php
                            $hostname = "localhost";
                            $username = "root";
                            $password = "";
                            $databaseName = "php";

                            $connect = mysqli_connect($hostname,$username,$password,$databaseName);
                            $query = "SELECT * FROM category";

                            $result1 = mysqli_query($connect,$query);
                            ?>
							
							<select name="product_caterogy" id="product_caterogy">
							<option value="mobile"> Mobile </option>
                                <?php while($row = mysqli_fetch_array($result1)):;?>
                                <option><?php echo $row[0];?></option>
                                <?php endwhile;?>
                            </select> 
						</div>
					</li></html>