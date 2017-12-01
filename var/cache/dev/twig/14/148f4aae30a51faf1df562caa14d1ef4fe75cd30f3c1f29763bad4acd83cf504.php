<?php

/* AppBundle:User:new.html.twig */
class __TwigTemplate_012528865d0a8693fabd821c2b707c5839f20d3a395fa984289e2474f91bf199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:new.html.twig", 1);
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
        $__internal_9589d8855638d6b005b61fadcf28f1b53a5dd36fcc77b19fb5a5b3b88d41cd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9589d8855638d6b005b61fadcf28f1b53a5dd36fcc77b19fb5a5b3b88d41cd59->enter($__internal_9589d8855638d6b005b61fadcf28f1b53a5dd36fcc77b19fb5a5b3b88d41cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new.html.twig"));

        $__internal_2d5216e8ef80ab1e4007198b13d0fe2f81da7025c5e9a2b8b41a262bb1dbdb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5216e8ef80ab1e4007198b13d0fe2f81da7025c5e9a2b8b41a262bb1dbdb8e->enter($__internal_2d5216e8ef80ab1e4007198b13d0fe2f81da7025c5e9a2b8b41a262bb1dbdb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9589d8855638d6b005b61fadcf28f1b53a5dd36fcc77b19fb5a5b3b88d41cd59->leave($__internal_9589d8855638d6b005b61fadcf28f1b53a5dd36fcc77b19fb5a5b3b88d41cd59_prof);

        
        $__internal_2d5216e8ef80ab1e4007198b13d0fe2f81da7025c5e9a2b8b41a262bb1dbdb8e->leave($__internal_2d5216e8ef80ab1e4007198b13d0fe2f81da7025c5e9a2b8b41a262bb1dbdb8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f992fd9f2d7f90d7bceb5074a79699fa84b427106f50169b3e9e1f4095469c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f992fd9f2d7f90d7bceb5074a79699fa84b427106f50169b3e9e1f4095469c80->enter($__internal_f992fd9f2d7f90d7bceb5074a79699fa84b427106f50169b3e9e1f4095469c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cefb433e0be3de15c8e03e91d7880ef5fa8cd57c52a929f2695f80b0ff337b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cefb433e0be3de15c8e03e91d7880ef5fa8cd57c52a929f2695f80b0ff337b8->enter($__internal_3cefb433e0be3de15c8e03e91d7880ef5fa8cd57c52a929f2695f80b0ff337b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "create new user";
        
        $__internal_3cefb433e0be3de15c8e03e91d7880ef5fa8cd57c52a929f2695f80b0ff337b8->leave($__internal_3cefb433e0be3de15c8e03e91d7880ef5fa8cd57c52a929f2695f80b0ff337b8_prof);

        
        $__internal_f992fd9f2d7f90d7bceb5074a79699fa84b427106f50169b3e9e1f4095469c80->leave($__internal_f992fd9f2d7f90d7bceb5074a79699fa84b427106f50169b3e9e1f4095469c80_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_75ac1d69d58c2e3cc871bc78c95a3a3bc8c868e541f1f1e52405d1415def65e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ac1d69d58c2e3cc871bc78c95a3a3bc8c868e541f1f1e52405d1415def65e6->enter($__internal_75ac1d69d58c2e3cc871bc78c95a3a3bc8c868e541f1f1e52405d1415def65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0909c5ecbd562702fc0edf8233fb5d262348020534410b938f261e744e0bdfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0909c5ecbd562702fc0edf8233fb5d262348020534410b938f261e744e0bdfe7->enter($__internal_0909c5ecbd562702fc0edf8233fb5d262348020534410b938f261e744e0bdfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_0909c5ecbd562702fc0edf8233fb5d262348020534410b938f261e744e0bdfe7->leave($__internal_0909c5ecbd562702fc0edf8233fb5d262348020534410b938f261e744e0bdfe7_prof);

        
        $__internal_75ac1d69d58c2e3cc871bc78c95a3a3bc8c868e541f1f1e52405d1415def65e6->leave($__internal_75ac1d69d58c2e3cc871bc78c95a3a3bc8c868e541f1f1e52405d1415def65e6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}create new user{% endblock %}

{% block body %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}


{% endblock %}
", "AppBundle:User:new.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/new.html.twig");
    }
}
