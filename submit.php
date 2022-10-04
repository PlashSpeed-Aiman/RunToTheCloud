<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <title>Health Food Recommendation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="submit.css">
  </head>
  
  <body background='https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/07/healthy-eating-salmon-salad-fruit-peaches-1296x728-header.jpg'>
    <div class="header-center">
        <a href="#default">Health Based Food Recommendation System</a>
    </div>
    <div class="login">
        <h1>Here are your suggested food :</h1>
        
<?php
    $disease = $_POST['medicalhistory'];
    
    switch ($disease){
        case 'HBP':
            echo '<img src="https://static.onecms.io/wp-content/uploads/sites/44/2020/03/19/image-1.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>Sheet-Pan Chili-Lime Salmon with Potatoes & Peppers</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>1 pound Yukon Gold potatoes, cut into 3/4-inch pieces </li>
                <li> 2 tablespoons extra-virgin olive oil, divided </li>
                <li> ¾ teaspoon salt, divided </li>
                <li> ¼ teaspoon ground pepper </li>
                <li> 2 teaspoons chili powder </li>
                <li> 1 teaspoon ground cumin </li>
                <li> ½ teaspoon garlic powder </li>
                <li> 1 lime, zested and quartered </li>
                <li> 2 medium bell peppers, any color, sliced </li>
                <li> 1 ¼ pounds center-cut salmon fillet, skinned, if desired, and cut into 4 portions</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        case 'Cancer':
            echo '<img src="https://assets.unileversolutions.com/recipes-v2/230034.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>10 Minute Italian Chicken Stir Fry</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>1 Tbsp extra virgin olive oil </li>
                <li> ½ cup pre-sliced, fresh mushrooms </li>
                <li> 1 tsp finely minced garlic </li>
                <li> 1 tsp dried basil </li>
                <li> 1 tsp dried oregano </li>
                <li> 1 16 oz bag frozen mixed vegetables (or 3-4 cups fresh chopped vegetables) </li>
                <li> 2 cups cooked brown rice </li>
                <li> 2 Tbsp grated Parmesan cheese </li>
                <li> Salt &amp; freshly ground black pepper, to taste </li>
                <li> ½ cup fat-free, reduced sodium chicken broth </li>
                <li> ¾ lb skinless, boneless chicken breast, cut in ¾ inch pieces</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        case 'Heart Attack':
            echo '<img src="https://www.simplyrecipes.com/thmb/HSrl4rokOAxixBdN5T99LgQ9oCA=/2000x1333/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__05__Cauliflower-Fried-Rice-LEAD-4-09031aca6dc140e9bd6e35b87f9b49f5.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>Cauliflower Fried Rice</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>1/2 large head cauliflower</li>
                <li>2 tbsp. vegetable oil</li>
                <li>1 orange pepper, cut into thin 1/2' pieces</li>
                <li>1 scallion, thinly sliced</li>
                <li>1 2' piece ginger, cut into thin matchsticks</li>
                <li>2 tbsp. low-sodium soy sauce</li>
                <li>2 tsp. chili garlic paste</li>
                <li>4 large eggs</li>
                <li>1 c. frozen peas, thawed</li>
                <li>1 c. frozen edamame, thawed </li>
                <li> Lime wedges, for serving</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        case 'Kidney':
            echo '<img src="https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Best-Salisbury-Steak_EXPS_FT21_%204404_F_0831_1.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>Salisbury Steak</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>1 pound chopped steak or lean ground beef,chicken or turkey</li>
                <li>1 small onion, chopped</li>
                <li>½ cup green pepper, chopped</li>
                <li>1 teaspoon black pepper</li>
                <li>1 egg</li>
                <li>1 tablespoon vegetable oil</li>
                <li>½ cup water</li>
                <li>1 tablespoon corn starch</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        case 'Alzheimer':
            echo '<img src="https://s3.us-east-2.amazonaws.com/pfimg1/001/2b/95/2b95690e350a26ebe82111bb89021c85_1280m.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>Shrimp & Cheddar Grits</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>1 14-ounce can reduced-sodium chicken broth</li>
                <li>1 ½ cups water</li>
                <li>3/4 cup quick grits, (not instant) </li>
                <li>½ teaspoon freshly ground pepper, divided</li>
                <li>¾ cup extra-sharp or sharp Cheddar cheese</li>
                <li>1 pound peeled and deveined raw shrimp</li>
                <li>1 bunch scallions, trimmed and cut into 1-inch pieces</li>
                <li>1 tablespoon extra-virgin olive oil</li>
                <li>¼ teaspoon garlic powder</li>
                <li>⅛ teaspoon salt</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        case 'Osteoporosis':
            echo '<img src="https://otogazcafe.com/wp-content/uploads/2019/03/How-to-Have-Healthy-Baked-Goodies.png" alt="">';
            echo
            "<h5 style='text-align: center;'>One-Pan Chicken Parmesan Pasta</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>2 tablespoons extra-virgin olive oil, divided</li>
                <li>¼ cup whole-wheat panko breadcrumbs</li>
                <li>1 tablespoon plus 1 teaspoon minced garlic, divided</li>
                <li>1 pound boneless, skinless chicken breast, cut into 1/2-inch pieces</li>
                <li>1 teaspoon Italian seasoning</li>
                <li>¼ teaspoon salt</li>
                <li>3 cups low-sodium chicken broth</li>
                <li>1 ½ cups crushed tomatoes</li>
                <li>8 ounces whole-wheat penne</li>
                <li>½ cup shredded mozzarella cheese</li>
                <li>¼ cup shredded Parmesan cheese</li>
                <li>¼ cup chopped fresh basil</li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
            break;
        default:
            echo '<img src="https://img.taste.com.au/f59nXywO/taste/2018/01/mexican-chicken-and-rice-bowl-134872-2.jpg" alt="">';
            echo
            "<h5 style='text-align: center;'>Mexican bowl</h5>
            <h6>Ingredients:</h6>
            
            <ol>
                <li>Two-thirds of a cup low sodium canned pinto beans</li>
                <li>1 cup chopped spinach</li>
                <li>a quarter cup chopped tomatoes</li>
                <li>a quarter cup bell peppers</li>
                <li>1 ounce (oz) cheese</li>
                <li>1 tablespoon (tbsp) salsa </li>
            </ol>
            </div>";
                  
            echo
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>';
    }
?>
</body>
</html>