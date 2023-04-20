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

/* todo/index.html.twig */
class __TwigTemplate_e29a3067c73fdc8bf2996927a97869cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
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
        echo "    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due date</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) || array_key_exists("todos", $context) ? $context["todos"] : (function () { throw new RuntimeError('Variable "todos" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 17
            echo "                <tr>
                    <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</th>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "dueDate", [], "any", false, false, false, 20), "F j,Y, g:i a"), "html", null, true);
            echo "</td>
                    <div class=\"item-picture\">
                        <td><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Product/" . twig_get_attribute($this->env, $this->source, $context["todo"], "Image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" height=\"300px\" width=\"280px\"></td>
                    </div>
                    <td>
                        ";
            // line 26
            echo "                        ";
            // line 27
            echo "                        ";
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_details", ["id" => twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo " \" class='btn btn-success'>View</a>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class='btn btn-default'>Edit</a>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class='btn btn-danger'>Delete</a>


                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  121 => 30,  117 => 29,  112 => 28,  110 => 27,  108 => 26,  102 => 22,  97 => 20,  93 => 19,  89 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"bs-example\" data-example-id=\"striped-table\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Due date</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {% for todo in todos %}
                <tr>
                    <th scope=\"row\">{{ todo.id }}</th>
                    <td>{{ todo.name }}</td>
                    <td>{{ todo.dueDate|date('F j,Y, g:i a') }}</td>
                    <div class=\"item-picture\">
                        <td><img src=\"{{ asset('uploads/Product/' ~ todo.Image) }}\" height=\"300px\" width=\"280px\"></td>
                    </div>
                    <td>
                        {#                        <a href=\"{{ path('todo_details', {'id': todo.id}) }} \" class='btn btn-success'>View</a>#}
                        {#                        <a href=\"{{ path('todo_edit', {'id': todo.id}) }}\" class='btn btn-default'>Edit</a>#}
                        {#                        <a href=\"{{ path('todo_delete', {'id': todo.id}) }}\" class='btn btn-danger'>Delete</a>#}
                        <a href=\"{{ path('todo_details', {'id': todo.id}) }} \" class='btn btn-success'>View</a>
                        <a href=\"{{ path('todo_edit', {'id': todo.id}) }}\" class='btn btn-default'>Edit</a>
                        <a href=\"{{ path('todo_delete', {'id': todo.id}) }}\" class='btn btn-danger'>Delete</a>


                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "todo/index.html.twig", "/Users/minwang/todowebapp/templates/todo/index.html.twig");
    }
}
