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

/* todo/edit.html.twig */
class __TwigTemplate_8779ba024627c174af29c6960aab3a87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Task name"]]);
        // line 12
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"category\">Category:</label>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Category name"]]);
        // line 21
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        // line 30
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"priority\">Priority:</label>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "priority", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 38
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"due_date\">Due Date</label>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "due_date", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 46
        echo "
    </div>
    <input type=\"submit\" name=\"edit_todo\" value=\"Edit\" class=\"btn btn-primary\"/>
    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 49,  109 => 46,  107 => 42,  101 => 38,  99 => 34,  93 => 30,  91 => 25,  85 => 21,  83 => 16,  77 => 12,  75 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ form_start(form) }}
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        {{ form_widget(form.name,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Task name'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"category\">Category:</label>
        {{ form_widget(form.category,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Category name'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        {{ form_widget(form.description,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Description'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"priority\">Priority:</label>
        {{ form_widget(form.priority,{
            'attr':{
                'class':'form-control'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"due_date\">Due Date</label>
        {{ form_widget(form.due_date,{
            'attr':{
                'class':'form-control'
            }
        }) }}
    </div>
    <input type=\"submit\" name=\"edit_todo\" value=\"Edit\" class=\"btn btn-primary\"/>
    {{ form_end(form) }}
{% endblock %}", "todo/edit.html.twig", "/Users/minwang/todowebapp/templates/todo/edit.html.twig");
    }
}
