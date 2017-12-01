<?php

/* AppBundle:User:new_address.html.twig */
class __TwigTemplate_34f3cdb9c116b84f0cdede96d1fbf25f38ccf98357a2f348a9d03453cfa795ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:new_address.html.twig", 1);
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
        $__internal_37ff94b6833c40c55af3754138bd472bedf8b12c278764e13fe549494d955cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ff94b6833c40c55af3754138bd472bedf8b12c278764e13fe549494d955cdd->enter($__internal_37ff94b6833c40c55af3754138bd472bedf8b12c278764e13fe549494d955cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_address.html.twig"));

        $__internal_5b9bfb6a8d4e05289449cc5eaf43818112afe23c263aaf60f6dc20c547c2f637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9bfb6a8d4e05289449cc5eaf43818112afe23c263aaf60f6dc20c547c2f637->enter($__internal_5b9bfb6a8d4e05289449cc5eaf43818112afe23c263aaf60f6dc20c547c2f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_address.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ff94b6833c40c55af3754138bd472bedf8b12c278764e13fe549494d955cdd->leave($__internal_37ff94b6833c40c55af3754138bd472bedf8b12c278764e13fe549494d955cdd_prof);

        
        $__internal_5b9bfb6a8d4e05289449cc5eaf43818112afe23c263aaf60f6dc20c547c2f637->leave($__internal_5b9bfb6a8d4e05289449cc5eaf43818112afe23c263aaf60f6dc20c547c2f637_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b456c4435ea1b5e90b1028cf6aa32b45437d47c05b774b90fd157f9eb2b5a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b456c4435ea1b5e90b1028cf6aa32b45437d47c05b774b90fd157f9eb2b5a56->enter($__internal_9b456c4435ea1b5e90b1028cf6aa32b45437d47c05b774b90fd157f9eb2b5a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b3a3ec2d2b31a57db015a8fbda4780fb731a28966ea5e87e785b6e7f1d0a976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3a3ec2d2b31a57db015a8fbda4780fb731a28966ea5e87e785b6e7f1d0a976->enter($__internal_6b3a3ec2d2b31a57db015a8fbda4780fb731a28966ea5e87e785b6e7f1d0a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new address";
        
        $__internal_6b3a3ec2d2b31a57db015a8fbda4780fb731a28966ea5e87e785b6e7f1d0a976->leave($__internal_6b3a3ec2d2b31a57db015a8fbda4780fb731a28966ea5e87e785b6e7f1d0a976_prof);

        
        $__internal_9b456c4435ea1b5e90b1028cf6aa32b45437d47c05b774b90fd157f9eb2b5a56->leave($__internal_9b456c4435ea1b5e90b1028cf6aa32b45437d47c05b774b90fd157f9eb2b5a56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb76499587fb8b9fbb21171d0ce7f5bec147e6e4d0ce14fa55bbcb5fb73514d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb76499587fb8b9fbb21171d0ce7f5bec147e6e4d0ce14fa55bbcb5fb73514d->enter($__internal_9cb76499587fb8b9fbb21171d0ce7f5bec147e6e4d0ce14fa55bbcb5fb73514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1725ce62854c9e0168690f0997bb161c13f67b091ac106edc3521c8e82b8ddc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1725ce62854c9e0168690f0997bb161c13f67b091ac106edc3521c8e82b8ddc6->enter($__internal_1725ce62854c9e0168690f0997bb161c13f67b091ac106edc3521c8e82b8ddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1725ce62854c9e0168690f0997bb161c13f67b091ac106edc3521c8e82b8ddc6->leave($__internal_1725ce62854c9e0168690f0997bb161c13f67b091ac106edc3521c8e82b8ddc6_prof);

        
        $__internal_9cb76499587fb8b9fbb21171d0ce7f5bec147e6e4d0ce14fa55bbcb5fb73514d->leave($__internal_9cb76499587fb8b9fbb21171d0ce7f5bec147e6e4d0ce14fa55bbcb5fb73514d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new_address.html.twig";
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

{% block title %}new address{% endblock %}

{% block body %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}


{% endblock %}", "AppBundle:User:new_address.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/new_address.html.twig");
    }
}
