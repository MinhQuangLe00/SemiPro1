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

/* homepage/Upload.php */
class __TwigTemplate_5dddf197d553ba937e93817410550a19 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/Upload.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/Upload.php"));

        // line 1
        echo "<?php
\$target_dir = \"uploads/\";
\$target_file = \$target_dir . basename(\$_FILES[\"fileToUpload\"][\"name\"]);
\$uploadOk = 1;
\$imageFileType = strtolower(pathinfo(\$target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset(\$_POST[\"submit\"])) {
    \$check = getimagesize(\$_FILES[\"fileToUpload\"][\"tmp_name\"]);
    if(\$check !== false) {
        echo \"File is an image - \" . \$check[\"mime\"] . \".\";
        \$uploadOk = 1;
    } else {
        echo \"File is not an image.\";
        \$uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists(\$target_file)) {
        echo \"Sorry, file already exists.\";
        \$uploadOk = 0;
    }
    // Check file size
    if (\$_FILES[\"fileToUpload\"][\"size\"] > 500000) {
        echo \"Sorry, your file is too large.\";
        \$uploadOk = 0;
    }
    // Allow certain file formats
    if(\$imageFileType != \"jpg\" && \$imageFileType != \"png\" && \$imageFileType != \"jpeg\"
        && \$imageFileType != \"gif\" ) {
        echo \"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\";
        \$uploadOk = 0;
    }
}
?>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "homepage/Upload.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$target_dir = \"uploads/\";
\$target_file = \$target_dir . basename(\$_FILES[\"fileToUpload\"][\"name\"]);
\$uploadOk = 1;
\$imageFileType = strtolower(pathinfo(\$target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset(\$_POST[\"submit\"])) {
    \$check = getimagesize(\$_FILES[\"fileToUpload\"][\"tmp_name\"]);
    if(\$check !== false) {
        echo \"File is an image - \" . \$check[\"mime\"] . \".\";
        \$uploadOk = 1;
    } else {
        echo \"File is not an image.\";
        \$uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists(\$target_file)) {
        echo \"Sorry, file already exists.\";
        \$uploadOk = 0;
    }
    // Check file size
    if (\$_FILES[\"fileToUpload\"][\"size\"] > 500000) {
        echo \"Sorry, your file is too large.\";
        \$uploadOk = 0;
    }
    // Allow certain file formats
    if(\$imageFileType != \"jpg\" && \$imageFileType != \"png\" && \$imageFileType != \"jpeg\"
        && \$imageFileType != \"gif\" ) {
        echo \"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\";
        \$uploadOk = 0;
    }
}
?>", "homepage/Upload.php", "/Users/minwang/todowebapp/templates/homepage/Upload.php");
    }
}
