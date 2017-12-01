<?php

/* AppBundle:User:show.html.twig */
class __TwigTemplate_b3b8f703a5d5134dec146f0577b0804be9f9c52fac3e6d138971a81af33cee62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3ccaef28c0ffb1b60265e7f53b81152b91530763d963fad8c2a78e6e371853e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ccaef28c0ffb1b60265e7f53b81152b91530763d963fad8c2a78e6e371853e->enter($__internal_c3ccaef28c0ffb1b60265e7f53b81152b91530763d963fad8c2a78e6e371853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show.html.twig"));

        $__internal_a204546a7323ccb6ce0d34cbd87a46adca750266dce6fd246bd99779e02a034d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a204546a7323ccb6ce0d34cbd87a46adca750266dce6fd246bd99779e02a034d->enter($__internal_a204546a7323ccb6ce0d34cbd87a46adca750266dce6fd246bd99779e02a034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ccaef28c0ffb1b60265e7f53b81152b91530763d963fad8c2a78e6e371853e->leave($__internal_c3ccaef28c0ffb1b60265e7f53b81152b91530763d963fad8c2a78e6e371853e_prof);

        
        $__internal_a204546a7323ccb6ce0d34cbd87a46adca750266dce6fd246bd99779e02a034d->leave($__internal_a204546a7323ccb6ce0d34cbd87a46adca750266dce6fd246bd99779e02a034d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07bbf7e5d07ef005b6ef38913d93bd5af330415814fbc8fffbb7591283a4fe2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07bbf7e5d07ef005b6ef38913d93bd5af330415814fbc8fffbb7591283a4fe2e->enter($__internal_07bbf7e5d07ef005b6ef38913d93bd5af330415814fbc8fffbb7591283a4fe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_769b1e662186084770f201ca68788d17938cefba5e81ba49d891bceade5ca4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769b1e662186084770f201ca68788d17938cefba5e81ba49d891bceade5ca4f1->enter($__internal_769b1e662186084770f201ca68788d17938cefba5e81ba49d891bceade5ca4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show user";
        
        $__internal_769b1e662186084770f201ca68788d17938cefba5e81ba49d891bceade5ca4f1->leave($__internal_769b1e662186084770f201ca68788d17938cefba5e81ba49d891bceade5ca4f1_prof);

        
        $__internal_07bbf7e5d07ef005b6ef38913d93bd5af330415814fbc8fffbb7591283a4fe2e->leave($__internal_07bbf7e5d07ef005b6ef38913d93bd5af330415814fbc8fffbb7591283a4fe2e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c456e55d4c5c47f1ba912c97be2408b72018817193dfda71b48b3ea307c96310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c456e55d4c5c47f1ba912c97be2408b72018817193dfda71b48b3ea307c96310->enter($__internal_c456e55d4c5c47f1ba912c97be2408b72018817193dfda71b48b3ea307c96310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eec3b4702908410ce7aae1e485fc44a67e0cbb9e981e8f2d5147a0dd3e2c1370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec3b4702908410ce7aae1e485fc44a67e0cbb9e981e8f2d5147a0dd3e2c1370->enter($__internal_eec3b4702908410ce7aae1e485fc44a67e0cbb9e981e8f2d5147a0dd3e2c1370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if (($context["user"] ?? $this->getContext($context, "user"))) {
            // line 7
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "surname", array()), "html", null, true);
            echo "</h1>
    <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "description", array()), "html", null, true);
            echo "</p>
        <div><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_modify", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">modyfikuj uzytkownika</a></div>
    ";
        } else {
            // line 11
            echo "    <h1>nie ma uzytkownika o takim id</h1>
    ";
        }
        
        $__internal_eec3b4702908410ce7aae1e485fc44a67e0cbb9e981e8f2d5147a0dd3e2c1370->leave($__internal_eec3b4702908410ce7aae1e485fc44a67e0cbb9e981e8f2d5147a0dd3e2c1370_prof);

        
        $__internal_c456e55d4c5c47f1ba912c97be2408b72018817193dfda71b48b3ea307c96310->leave($__internal_c456e55d4c5c47f1ba912c97be2408b72018817193dfda71b48b3ea307c96310_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  82 => 9,  78 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Show user{% endblock %}

{% block body %}
    {% if user %}
    <h1>{{ user.name }} {{ user.surname }}</h1>
    <p>{{ user.description }}</p>
        <div><a href=\"{{ path('app_user_modify', {'id': user.id})}}\">modyfikuj uzytkownika</a></div>
    {% else %}
    <h1>nie ma uzytkownika o takim id</h1>
    {% endif %}
{% endblock %}
", "AppBundle:User:show.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/show.html.twig");
    }
}
