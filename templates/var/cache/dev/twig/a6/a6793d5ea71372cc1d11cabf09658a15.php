<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile/Profile.php */
class __TwigTemplate_c45f6c5aef2e04e6e56091ae93f19aa3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/Profile.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/Profile.php"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <title>IT SourceCode</title>
    <link rel=\"stylesheet\" href=\"libs/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"libs/style.css\">
</head>
<?php
include 'connection.php';
session_start();
\$id=\$_SESSION['id'];
\$query=mysqli_query(\$db,\"SELECT * FROM users where user_id='\$id'\")or die(mysqli_error());
\$row=mysqli_fetch_array(\$query);
?>
<h1>User Profile</h1>
<div class=\"profile-input-field\">
    <h3>Please Fill-out All Fields</h3>
    <form method=\"post\" action=\"#\" >
        <div class=\"form-group\">
            <label>Fullname</label>
            <input type=\"text\" class=\"form-control\" name=\"fname\" style=\"width:20em;\" placeholder=\"Enter your Fullname\" value=\"<?php echo \$row['full_name']; ?>\" required />
        </div>
        <div class=\"form-group\">
            <label>Gender</label>
            <input type=\"text\" class=\"form-control\" name=\"gender\" style=\"width:20em;\" placeholder=\"Enter your Gender\" required value=\"<?php echo \$row['gender']; ?>\" />
        </div>
        <div class=\"form-group\">
            <label>Age</label>
            <input type=\"number\" class=\"form-control\" name=\"age\" style=\"width:20em;\" placeholder=\"Enter your Age\" value=\"<?php echo \$row['age']; ?>\">
        </div>
        <div class=\"form-group\">
            <label>Address</label>
            <input type=\"text\" class=\"form-control\" name=\"address\" style=\"width:20em;\" required placeholder=\"Enter your Address\" value=\"<?php echo \$row['address']; ?>\"></textarea>
        </div>
        <div class=\"form-group\">
            <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" style=\"width:20em; margin:0;\"><br><br>
            <center>
                <a href=\"logout.php\">Log out</a>
            </center>
        </div>
    </form>
</div>
</html>
<?php
if(isset(\$_POST['submit'])){
    \$fullname = \$_POST['fname'];
    \$gender = \$_POST['gender'];
    \$age = \$_POST['age'];
    \$address = \$_POST['address'];
    \$query = \"UPDATE users SET full_name = '\$fullname',
                      gender = '\$gender', age = \$age, address = '\$address'
                      WHERE user_id = '\$id'\";
    \$result = mysqli_query(\$db, \$query) or die(mysqli_error(\$db));
    ?>
    <script type=\"text/javascript\">
        alert(\"Update Successfull.\");
        window.location = \"index.php\";
    </script>
    <?php
}
?>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/Profile.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <title>IT SourceCode</title>
    <link rel=\"stylesheet\" href=\"libs/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"libs/style.css\">
</head>
<?php
include 'connection.php';
session_start();
\$id=\$_SESSION['id'];
\$query=mysqli_query(\$db,\"SELECT * FROM users where user_id='\$id'\")or die(mysqli_error());
\$row=mysqli_fetch_array(\$query);
?>
<h1>User Profile</h1>
<div class=\"profile-input-field\">
    <h3>Please Fill-out All Fields</h3>
    <form method=\"post\" action=\"#\" >
        <div class=\"form-group\">
            <label>Fullname</label>
            <input type=\"text\" class=\"form-control\" name=\"fname\" style=\"width:20em;\" placeholder=\"Enter your Fullname\" value=\"<?php echo \$row['full_name']; ?>\" required />
        </div>
        <div class=\"form-group\">
            <label>Gender</label>
            <input type=\"text\" class=\"form-control\" name=\"gender\" style=\"width:20em;\" placeholder=\"Enter your Gender\" required value=\"<?php echo \$row['gender']; ?>\" />
        </div>
        <div class=\"form-group\">
            <label>Age</label>
            <input type=\"number\" class=\"form-control\" name=\"age\" style=\"width:20em;\" placeholder=\"Enter your Age\" value=\"<?php echo \$row['age']; ?>\">
        </div>
        <div class=\"form-group\">
            <label>Address</label>
            <input type=\"text\" class=\"form-control\" name=\"address\" style=\"width:20em;\" required placeholder=\"Enter your Address\" value=\"<?php echo \$row['address']; ?>\"></textarea>
        </div>
        <div class=\"form-group\">
            <input type=\"submit\" name=\"submit\" class=\"btn btn-primary\" style=\"width:20em; margin:0;\"><br><br>
            <center>
                <a href=\"logout.php\">Log out</a>
            </center>
        </div>
    </form>
</div>
</html>
<?php
if(isset(\$_POST['submit'])){
    \$fullname = \$_POST['fname'];
    \$gender = \$_POST['gender'];
    \$age = \$_POST['age'];
    \$address = \$_POST['address'];
    \$query = \"UPDATE users SET full_name = '\$fullname',
                      gender = '\$gender', age = \$age, address = '\$address'
                      WHERE user_id = '\$id'\";
    \$result = mysqli_query(\$db, \$query) or die(mysqli_error(\$db));
    ?>
    <script type=\"text/javascript\">
        alert(\"Update Successfull.\");
        window.location = \"index.php\";
    </script>
    <?php
}
?>", "profile/Profile.php", "/Users/minwang/todowebapp/templates/profile/Profile.php");
    }
}
