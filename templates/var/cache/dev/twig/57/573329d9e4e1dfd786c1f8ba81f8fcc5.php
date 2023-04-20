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

/* login/index.html.twig */
class __TwigTemplate_ba0f5955a208fef8b1b303255d1021fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <link rel=\"stylesheet\" href=\"style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    section{
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
    }
    section .img-bg{
        position: relative;
        width: 50%;
        height: 100%;
    }
    section .img-bg img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    section .noi-dung{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
    }
    section .noi-dung .form{
        width: 50%;
    }
    section .noi-dung .form h2{
        color: #607d8b;
        font-weight: 500;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #ff4584;
        display: inline-block;
        letter-spacing: 1px;
    }
    section .noi-dung .form .input-form{
        margin-bottom: 20px;
    }
    section .noi-dung .form .input-form span{
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607db8;
        letter-spacing: 1px;
    }
    section .noi-dung .form .input-form input{
        width: 100%;
        padding: 10px 20px;
        outline: none;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-radius: 30px;
    }
    section .noi-dung .form .input-form input[type=\"submit\"]{
        background: #ff4584;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
        box-shadow: 0 1px 1px rgba(0,0,0,0.12),
        0 2px 2px rgba(0,0,0,0.12),
        0 4px 4px rgba(0,0,0,0.12),
        0 8px 8px rgba(0,0,0,0.12),
        0 16px 16px rgba(0,0,0,0.12);
    }
    section .noi-dung .form .input-form input[type=\"submit\"]:hover{
        background: #f53677;
    }
    section .noi-dung .form .nho-dang-nhap{
        margin-bottom: 10px;
        color: #607d8b;
        font-size: 14px;
    }
    section .noi-dung .form .input-form p{
        color: #607d8b;
    }
    section .noi-dung .form .input-form p a{
        color: #ff4584;
    }
    section .noi-dung .form h3{
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }
    section .noi-dung .form .icon-dang-nhap{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .noi-dung .form .icon-dang-nhap li{
        list-style: none;
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(1){
        color: #3b5999;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(2){
        color: #dd4b39;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(3){
        color: #55acee;
    }
    section .noi-dung .form .icon-dang-nhap li i{
        font-size: 24px;
    }
    @media (max-width: 768px){
        section .img-bg{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        section .noi-dung{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        section .noi-dung .form{
            width: 100%;
            padding: 40px;
            background: rgba(255 255 255 / 0.9);
            margin: 50px;
        }
        section .noi-dung .form h3{
            color: #607d8b;
            text-align: center;
            margin: 30px 0 10px;
            font-weight: 500;
        }
    }

</style>
<section>
    <!--Bắt Đầu Phần Hình Ảnh-->
    <div class=\"img-bg\">
        <img src='";
        // line 173
        echo "uploads/Product/Appleproduct.jpg";
        echo " ' alt=\"Login\">
    </div>
    <!--Kết Thúc Phần Hình Ảnh-->
    <!--Bắt Đầu Phần Nội Dung-->
    <div class=\"noi-dung\">
        <div class=\"form\">
            <h2>Login</h2>
            <form action=\"\">
                <div class=\"input-form\">
                    <span>Name</span>
                    <input type=\"text\" name=\"\">
                </div>
                <div class=\"input-form\">
                    <span>Password</span>
                    <input type=\"password\" name=\"\">
                </div>
                <div class=\"nho-dang-nhap\">
                    <label><input type=\"checkbox\" name=\"\"> Remember</label>
                </div>
                <div class=\"input-form\">
                    <input type=\"submit\" value=\"Login\">
                </div>
                <div class=\"input-form\">
                    <p>Don't have account yet? <a href=\"/register\">Register</a></p>
                </div>
            </form>
            <h3>Login in by social media</h3>
            <ul class=\"icon-dang-nhap\">
                <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                <li><i class=\"fa fa-google\" aria-hidden=\"true\"></i></li>
                <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
            </ul>
        </div>
    </div>
    <!--Kết Thúc Phần Nội Dung-->
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 173,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <link rel=\"stylesheet\" href=\"style.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    section{
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
    }
    section .img-bg{
        position: relative;
        width: 50%;
        height: 100%;
    }
    section .img-bg img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    section .noi-dung{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
    }
    section .noi-dung .form{
        width: 50%;
    }
    section .noi-dung .form h2{
        color: #607d8b;
        font-weight: 500;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #ff4584;
        display: inline-block;
        letter-spacing: 1px;
    }
    section .noi-dung .form .input-form{
        margin-bottom: 20px;
    }
    section .noi-dung .form .input-form span{
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607db8;
        letter-spacing: 1px;
    }
    section .noi-dung .form .input-form input{
        width: 100%;
        padding: 10px 20px;
        outline: none;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-radius: 30px;
    }
    section .noi-dung .form .input-form input[type=\"submit\"]{
        background: #ff4584;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
        box-shadow: 0 1px 1px rgba(0,0,0,0.12),
        0 2px 2px rgba(0,0,0,0.12),
        0 4px 4px rgba(0,0,0,0.12),
        0 8px 8px rgba(0,0,0,0.12),
        0 16px 16px rgba(0,0,0,0.12);
    }
    section .noi-dung .form .input-form input[type=\"submit\"]:hover{
        background: #f53677;
    }
    section .noi-dung .form .nho-dang-nhap{
        margin-bottom: 10px;
        color: #607d8b;
        font-size: 14px;
    }
    section .noi-dung .form .input-form p{
        color: #607d8b;
    }
    section .noi-dung .form .input-form p a{
        color: #ff4584;
    }
    section .noi-dung .form h3{
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }
    section .noi-dung .form .icon-dang-nhap{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .noi-dung .form .icon-dang-nhap li{
        list-style: none;
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(1){
        color: #3b5999;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(2){
        color: #dd4b39;
    }
    section .noi-dung .form .icon-dang-nhap li:nth-child(3){
        color: #55acee;
    }
    section .noi-dung .form .icon-dang-nhap li i{
        font-size: 24px;
    }
    @media (max-width: 768px){
        section .img-bg{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        section .noi-dung{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        section .noi-dung .form{
            width: 100%;
            padding: 40px;
            background: rgba(255 255 255 / 0.9);
            margin: 50px;
        }
        section .noi-dung .form h3{
            color: #607d8b;
            text-align: center;
            margin: 30px 0 10px;
            font-weight: 500;
        }
    }

</style>
<section>
    <!--Bắt Đầu Phần Hình Ảnh-->
    <div class=\"img-bg\">
        <img src='{{ ('uploads/Product/Appleproduct.jpg') }} ' alt=\"Login\">
    </div>
    <!--Kết Thúc Phần Hình Ảnh-->
    <!--Bắt Đầu Phần Nội Dung-->
    <div class=\"noi-dung\">
        <div class=\"form\">
            <h2>Login</h2>
            <form action=\"\">
                <div class=\"input-form\">
                    <span>Name</span>
                    <input type=\"text\" name=\"\">
                </div>
                <div class=\"input-form\">
                    <span>Password</span>
                    <input type=\"password\" name=\"\">
                </div>
                <div class=\"nho-dang-nhap\">
                    <label><input type=\"checkbox\" name=\"\"> Remember</label>
                </div>
                <div class=\"input-form\">
                    <input type=\"submit\" value=\"Login\">
                </div>
                <div class=\"input-form\">
                    <p>Don't have account yet? <a href=\"/register\">Register</a></p>
                </div>
            </form>
            <h3>Login in by social media</h3>
            <ul class=\"icon-dang-nhap\">
                <li><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></li>
                <li><i class=\"fa fa-google\" aria-hidden=\"true\"></i></li>
                <li><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></li>
            </ul>
        </div>
    </div>
    <!--Kết Thúc Phần Nội Dung-->
</section>
</body>
</html>", "login/index.html.twig", "/Users/minwang/todowebapp/templates/login/index.html.twig");
    }
}
