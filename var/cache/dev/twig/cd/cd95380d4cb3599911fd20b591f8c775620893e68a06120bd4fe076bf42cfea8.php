<?php

/* AppBundle:User:show_all.html.twig */
class __TwigTemplate_9b0e6384589d887047a7fe152b0e1e4402e37da7561d1179483f2204aa63517e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:show_all.html.twig", 1);
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
        $__internal_04817c9fb7f871113d1dbdd23a71cfeb41675271f2a79b220adc20e151fd6402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04817c9fb7f871113d1dbdd23a71cfeb41675271f2a79b220adc20e151fd6402->enter($__internal_04817c9fb7f871113d1dbdd23a71cfeb41675271f2a79b220adc20e151fd6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show_all.html.twig"));

        $__internal_62672adeb8fe129be9a176c4d406291c363d3ac5133589b5270cd7c0f4be7670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62672adeb8fe129be9a176c4d406291c363d3ac5133589b5270cd7c0f4be7670->enter($__internal_62672adeb8fe129be9a176c4d406291c363d3ac5133589b5270cd7c0f4be7670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:show_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04817c9fb7f871113d1dbdd23a71cfeb41675271f2a79b220adc20e151fd6402->leave($__internal_04817c9fb7f871113d1dbdd23a71cfeb41675271f2a79b220adc20e151fd6402_prof);

        
        $__internal_62672adeb8fe129be9a176c4d406291c363d3ac5133589b5270cd7c0f4be7670->leave($__internal_62672adeb8fe129be9a176c4d406291c363d3ac5133589b5270cd7c0f4be7670_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5021b61d2cd69aa11c994a36ba4e2c53ea083f152e6b665a739526cabccb796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5021b61d2cd69aa11c994a36ba4e2c53ea083f152e6b665a739526cabccb796->enter($__internal_b5021b61d2cd69aa11c994a36ba4e2c53ea083f152e6b665a739526cabccb796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01325b94242fe7a9eb020291e6f45c62912faf0f7d6dc66bfb31da88fe8c3cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01325b94242fe7a9eb020291e6f45c62912faf0f7d6dc66bfb31da88fe8c3cd1->enter($__internal_01325b94242fe7a9eb020291e6f45c62912faf0f7d6dc66bfb31da88fe8c3cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:showAll";
        
        $__internal_01325b94242fe7a9eb020291e6f45c62912faf0f7d6dc66bfb31da88fe8c3cd1->leave($__internal_01325b94242fe7a9eb020291e6f45c62912faf0f7d6dc66bfb31da88fe8c3cd1_prof);

        
        $__internal_b5021b61d2cd69aa11c994a36ba4e2c53ea083f152e6b665a739526cabccb796->leave($__internal_b5021b61d2cd69aa11c994a36ba4e2c53ea083f152e6b665a739526cabccb796_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6061d37cf7ab278489f57f8c9a7b70418b9f40feff187854972766e3bd417bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6061d37cf7ab278489f57f8c9a7b70418b9f40feff187854972766e3bd417bab->enter($__internal_6061d37cf7ab278489f57f8c9a7b70418b9f40feff187854972766e3bd417bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc9a66eb3c342ecd2b016f8986ab262edaa442674a8f5fb022178d97b4e92769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9a66eb3c342ecd2b016f8986ab262edaa442674a8f5fb022178d97b4e92769->enter($__internal_dc9a66eb3c342ecd2b016f8986ab262edaa442674a8f5fb022178d97b4e92769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo twig_include($this->env, $context, "AppBundle:User:show.html.twig", array("user" => $context["user"]));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dc9a66eb3c342ecd2b016f8986ab262edaa442674a8f5fb022178d97b4e92769->leave($__internal_dc9a66eb3c342ecd2b016f8986ab262edaa442674a8f5fb022178d97b4e92769_prof);

        
        $__internal_6061d37cf7ab278489f57f8c9a7b70418b9f40feff187854972766e3bd417bab->leave($__internal_6061d37cf7ab278489f57f8c9a7b70418b9f40feff187854972766e3bd417bab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:User:showAll{% endblock %}

{% block body %}
{% for user in users %}
{{ include('AppBundle:User:show.html.twig', {'user': user}) }}
{% endfor %}
{% endblock %}
", "AppBundle:User:show_all.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/show_all.html.twig");
    }
}
