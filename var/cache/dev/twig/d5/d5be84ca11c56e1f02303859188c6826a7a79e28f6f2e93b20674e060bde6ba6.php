<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9292f370c058ff9daa1fcc07373349c92582bf816ee99b9d21dd71cfcfb50c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9292f370c058ff9daa1fcc07373349c92582bf816ee99b9d21dd71cfcfb50c79->enter($__internal_9292f370c058ff9daa1fcc07373349c92582bf816ee99b9d21dd71cfcfb50c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_96a4d0ba93d07023d70273f08993b45e70bd63261e4169aa3ab7e03758cff886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a4d0ba93d07023d70273f08993b45e70bd63261e4169aa3ab7e03758cff886->enter($__internal_96a4d0ba93d07023d70273f08993b45e70bd63261e4169aa3ab7e03758cff886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9292f370c058ff9daa1fcc07373349c92582bf816ee99b9d21dd71cfcfb50c79->leave($__internal_9292f370c058ff9daa1fcc07373349c92582bf816ee99b9d21dd71cfcfb50c79_prof);

        
        $__internal_96a4d0ba93d07023d70273f08993b45e70bd63261e4169aa3ab7e03758cff886->leave($__internal_96a4d0ba93d07023d70273f08993b45e70bd63261e4169aa3ab7e03758cff886_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9ea40da2b9195986b2a608830eafea1c50126eb5571ef5437eb8b8e9d55720c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ea40da2b9195986b2a608830eafea1c50126eb5571ef5437eb8b8e9d55720c->enter($__internal_b9ea40da2b9195986b2a608830eafea1c50126eb5571ef5437eb8b8e9d55720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61b86d514ae9b815acdfdfc0580a1e870112842e35010e228acf6eb591a5b11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b86d514ae9b815acdfdfc0580a1e870112842e35010e228acf6eb591a5b11e->enter($__internal_61b86d514ae9b815acdfdfc0580a1e870112842e35010e228acf6eb591a5b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_61b86d514ae9b815acdfdfc0580a1e870112842e35010e228acf6eb591a5b11e->leave($__internal_61b86d514ae9b815acdfdfc0580a1e870112842e35010e228acf6eb591a5b11e_prof);

        
        $__internal_b9ea40da2b9195986b2a608830eafea1c50126eb5571ef5437eb8b8e9d55720c->leave($__internal_b9ea40da2b9195986b2a608830eafea1c50126eb5571ef5437eb8b8e9d55720c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de417e04c451cf9e2adcaccb9b8635d900158dd8161a1b486813e4b46890e239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de417e04c451cf9e2adcaccb9b8635d900158dd8161a1b486813e4b46890e239->enter($__internal_de417e04c451cf9e2adcaccb9b8635d900158dd8161a1b486813e4b46890e239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1f44cf2d655c9ea182d79d8d76fc73b51f743c9938fede1dc085ff03cf8249b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f44cf2d655c9ea182d79d8d76fc73b51f743c9938fede1dc085ff03cf8249b->enter($__internal_d1f44cf2d655c9ea182d79d8d76fc73b51f743c9938fede1dc085ff03cf8249b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d1f44cf2d655c9ea182d79d8d76fc73b51f743c9938fede1dc085ff03cf8249b->leave($__internal_d1f44cf2d655c9ea182d79d8d76fc73b51f743c9938fede1dc085ff03cf8249b_prof);

        
        $__internal_de417e04c451cf9e2adcaccb9b8635d900158dd8161a1b486813e4b46890e239->leave($__internal_de417e04c451cf9e2adcaccb9b8635d900158dd8161a1b486813e4b46890e239_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4191f71910d83778640fdb45633fc4cda0efd398e0e8c98c8a7efe41f65f26d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4191f71910d83778640fdb45633fc4cda0efd398e0e8c98c8a7efe41f65f26d5->enter($__internal_4191f71910d83778640fdb45633fc4cda0efd398e0e8c98c8a7efe41f65f26d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f83dfbc3fa7459a319f6390efa62219acccfeeca9ca4a8c2cb35899399bc7953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83dfbc3fa7459a319f6390efa62219acccfeeca9ca4a8c2cb35899399bc7953->enter($__internal_f83dfbc3fa7459a319f6390efa62219acccfeeca9ca4a8c2cb35899399bc7953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f83dfbc3fa7459a319f6390efa62219acccfeeca9ca4a8c2cb35899399bc7953->leave($__internal_f83dfbc3fa7459a319f6390efa62219acccfeeca9ca4a8c2cb35899399bc7953_prof);

        
        $__internal_4191f71910d83778640fdb45633fc4cda0efd398e0e8c98c8a7efe41f65f26d5->leave($__internal_4191f71910d83778640fdb45633fc4cda0efd398e0e8c98c8a7efe41f65f26d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
