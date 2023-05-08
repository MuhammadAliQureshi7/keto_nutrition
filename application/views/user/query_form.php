<!-- <div class="banner banner-2">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2>Add your Query</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, consectetur. Ullam incidunt similique aliquam placeat maxime explicabo. Illo, voluptatem, fugiat magnam quidem officiis, alias quod est debitis magni odit soluta?</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="form">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2"></div>
                <div class="col-xl-8 col-lg-8">
                    <h2>Add your Query</h2>
                    <form action="<?php echo base_url('home/query_form/'.$this->uri->segment(3)); ?>" method="post">                       



                                <div class="tab">
                                    <div class="panel">
                                        <h3>Select your Gender</h3>
                                        <div class="wrapper">
                                            <input type="radio" name="gender" value="Male" id="option-1" checked>
                                            <input type="radio" name="gender" value="Female" id="option-2">
                                            <label for="option-1" class="option option-1">
                                                <div class="dot"></div>
                                                <span>Male</span>
                                                </label>
                                            <label for="option-2" class="option option-2">
                                                <div class="dot"></div>
                                                <span>Female</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Enter your age</h3>
                                        <input type="number" name="age" class="form-control" min="1" placeholder="Enter your Age" value="<?php echo set_value('age');?>">   
                                        <?php echo form_error('age') ?>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Enter your height</h3>
                                        <input type="number" name="height" class="form-control" min="1" placeholder="Enter your Height" value="<?php echo set_value('height');?>">
                                        <?php echo form_error('height') ?>  
                                        <select name="height_unit" class="form-control">
                                            <option value="">Select a Height Unit</option>
                                            <option>Inches</option>
                                            <option>Centimeters</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Enter your Weight</h3>
                                        <input type="number" name="weight" class="form-control" min="1" placeholder="Enter your Weight" value="<?php echo set_value('weight');?>">                                
                                        <?php echo form_error('weight') ?>  
                                        <select name="weight_unit" class="form-control">
                                            <option value="">Select a Weight Unit</option>
                                            <option>kgs</option>
                                            <option>lbs</option>
                                        </select>
                                        <?php echo form_error('weight_unit') ?>    
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Select your Physical Activity Level</h3>
                                        <div class="wrapper">
                                            <input type="radio" name="activity_level" value="Poor" id="activity-1" checked>
                                            <input type="radio" name="activity_level" value="Average" id="activity-2">
                                            <input type="radio" name="activity_level" value="Excellent" id="activity-3">
                                            <label for="activity-1" class="option activity-1">
                                                <div class="dot"></div>
                                                <span>Poor</span>
                                            </label>
                                            <label for="activity-2" class="option activity-2">
                                                <div class="dot"></div>
                                                <span>Average</span>
                                            </label>
                                            <label for="activity-3" class="option activity-3">
                                                <div class="dot"></div>
                                                <span>Excellent</span>
                                            </label>
                                        </div>
                                        <?php echo form_error('activity_level') ?>    
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Select your Health Status</h3>
                                        <div class="wrapper">
                                            <input type="radio" name="health_status" value="Poor" id="health-1" checked>
                                            <input type="radio" name="health_status" value="Average" id="health-2">
                                            <input type="radio" name="health_status" value="Excellent" id="health-3">
                                            <label for="health-1" class="option health-1">
                                                <div class="dot"></div>
                                                <span>Poor</span>
                                            </label>
                                            <label for="health-2" class="option health-2">
                                                <div class="dot"></div>
                                                <span>Average</span>
                                            </label>
                                            <label for="health-3" class="option health-3">
                                                <div class="dot"></div>
                                                <span>Excellent</span>
                                            </label>
                                        </div>
                                        <?php echo form_error('health_status') ?>    
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Select your Cooking Skills</h3>
                                        <div class="wrapper">
                                            <input type="radio" name="cooking_skills" value="Poor" id="cooking-1" checked>
                                            <input type="radio" name="cooking_skills" value="Average" id="cooking-2">
                                            <input type="radiSo" name="cooking_skills" value="Excellent" id="cooking-3">
                                            <label for="cooking-1" class="option cooking-1">
                                                <div class="dot"></div>
                                                <span>Poor</span>
                                            </label>
                                            <label for="cooking-2" class="option cooking-2">
                                                <div class="dot"></div>
                                                <span>Average</span>
                                            </label>
                                            <label for="cooking-3" class="option cooking-3">
                                                <div class="dot"></div>
                                                <span>Excellent</span>
                                            </label>
                                        </div>
                                        <?php echo form_error('cooking_skills') ?>    
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Enter your Budget</h3>                                        
                                        <input type="number" name="budget" class="form-control" min="1" placeholder="Enter your Budget  ">
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Select your Food Preference</h3>
                                        <div class="wrapper">
                                            <input type="radio" name="food_preferences" value="Vegan" id="food-1" checked>
                                            <input type="radio" name="food_preferences" value="Non-Vegan" id="food-2">
                                            <input type="radio" name="food_preferences" value="Both" id="food-3">
                                            <label for="food-1" class="option food-1">
                                                <div class="dot"></div>
                                                <span>Vegan</span>
                                            </label>
                                            <label for="food-2" class="option food-2">
                                                <div class="dot"></div>
                                                <span>Non-Vegan</span>
                                            </label>
                                            <label for="food-3" class="option food-3">
                                                <div class="dot"></div>
                                                <span>Both</span>
                                            </label>
                                        </div>
                                        <?php echo form_error('cooking_skills') ?>    
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="panel">
                                        <h3>Enter your Food Preferences Details</h3>                                        
                                        <textarea name="food_preference_details" class="form-control" cols="30" rows="10" placeholder="Enter your Food Preference Details "></textarea>
                                        <?php echo form_error('food_preference_details') ?>
                                    </div>
                                </div>
                                <div class="step-nav">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    <button type="submit" id="submit">Submit</button>
                                </div>
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>




                               
                                                     
                            </div>                                                                                                             
                                                                                                                  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>