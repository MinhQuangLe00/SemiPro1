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

/* todo/details.html.twig */
class __TwigTemplate_6f2edc8a1db44fde2d4e8d1483521c99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
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
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_todo");
        echo "\" class=\"btn btn-default\">Back to Todo List</a>
    <hr/>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) || array_key_exists("todos", $context) ? $context["todos"] : (function () { throw new RuntimeError('Variable "todos" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 7
            echo "        <h2 class=\"page-header\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Category: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "category", [], "any", false, false, false, 9), "html", null, true);
            echo "</li>
            <li class=\"list-group-item\">Priority: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "priority", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
            <li class=\"list-group-item\">Due: <strong>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "dueDate", [], "any", false, false, false, 11), "F j,Y, g:i a"), "html", null, true);
            echo "</strong></li>
        </ul>
        <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  92 => 11,  88 => 10,  84 => 9,  78 => 7,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path('app_todo') }}\" class=\"btn btn-default\">Back to Todo List</a>
    <hr/>
    {% for todo in todos  %}
        <h2 class=\"page-header\">{{ todo.name }}</h2>
        <ul class=\"list-group\">
            <li class=\"list-group-item\">Category: {{ todo.category }}</li>
            <li class=\"list-group-item\">Priority: {{ todo.priority }}</li>
            <li class=\"list-group-item\">Due: <strong>{{ todo.dueDate|date('F j,Y, g:i a') }}</strong></li>
        </ul>
        <p>{{ todo.description }}</p>
    {% endfor %}
{% endblock %}", "todo/details.html.twig", "/Users/minwang/todowebapp/templates/todo/details.html.twig");
    }
}
