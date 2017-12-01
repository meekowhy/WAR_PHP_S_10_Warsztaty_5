<?php

/* AppBundle:User:new_email.html.twig */
class __TwigTemplate_5b6a462e4f81d536c2cf9c990535b2a764a817d62063baa2325f3eb436ca545a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:new_email.html.twig", 1);
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
        $__internal_87766b3ecbd2a4654a7e447cf9cae4ce0dccb5d9603c7e45adf000753ef92c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87766b3ecbd2a4654a7e447cf9cae4ce0dccb5d9603c7e45adf000753ef92c33->enter($__internal_87766b3ecbd2a4654a7e447cf9cae4ce0dccb5d9603c7e45adf000753ef92c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_email.html.twig"));

        $__internal_f59dc7da1d825bb6eab4983d91ae40364bbec9eb90f288656d6cd8030afd9528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59dc7da1d825bb6eab4983d91ae40364bbec9eb90f288656d6cd8030afd9528->enter($__internal_f59dc7da1d825bb6eab4983d91ae40364bbec9eb90f288656d6cd8030afd9528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87766b3ecbd2a4654a7e447cf9cae4ce0dccb5d9603c7e45adf000753ef92c33->leave($__internal_87766b3ecbd2a4654a7e447cf9cae4ce0dccb5d9603c7e45adf000753ef92c33_prof);

        
        $__internal_f59dc7da1d825bb6eab4983d91ae40364bbec9eb90f288656d6cd8030afd9528->leave($__internal_f59dc7da1d825bb6eab4983d91ae40364bbec9eb90f288656d6cd8030afd9528_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc8d0aba40345660ec731fdaf047d8f253a1844e368e89e1284968cebf910493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8d0aba40345660ec731fdaf047d8f253a1844e368e89e1284968cebf910493->enter($__internal_cc8d0aba40345660ec731fdaf047d8f253a1844e368e89e1284968cebf910493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ed2a2bf1b8a91e7318c4830a8a1b9959e6fe572ecd1098c3539186822e5755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed2a2bf1b8a91e7318c4830a8a1b9959e6fe572ecd1098c3539186822e5755d->enter($__internal_4ed2a2bf1b8a91e7318c4830a8a1b9959e6fe572ecd1098c3539186822e5755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new email";
        
        $__internal_4ed2a2bf1b8a91e7318c4830a8a1b9959e6fe572ecd1098c3539186822e5755d->leave($__internal_4ed2a2bf1b8a91e7318c4830a8a1b9959e6fe572ecd1098c3539186822e5755d_prof);

        
        $__internal_cc8d0aba40345660ec731fdaf047d8f253a1844e368e89e1284968cebf910493->leave($__internal_cc8d0aba40345660ec731fdaf047d8f253a1844e368e89e1284968cebf910493_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d2d93d568bc64f8f52fd61c76a11f17d5d36163146de1ee12f3e8e1dfe1fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d2d93d568bc64f8f52fd61c76a11f17d5d36163146de1ee12f3e8e1dfe1fd8->enter($__internal_50d2d93d568bc64f8f52fd61c76a11f17d5d36163146de1ee12f3e8e1dfe1fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42a6264f785c86b526b7f383192f426fb9763423d590bfcd132f230121ca55a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a6264f785c86b526b7f383192f426fb9763423d590bfcd132f230121ca55a5->enter($__internal_42a6264f785c86b526b7f383192f426fb9763423d590bfcd132f230121ca55a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42a6264f785c86b526b7f383192f426fb9763423d590bfcd132f230121ca55a5->leave($__internal_42a6264f785c86b526b7f383192f426fb9763423d590bfcd132f230121ca55a5_prof);

        
        $__internal_50d2d93d568bc64f8f52fd61c76a11f17d5d36163146de1ee12f3e8e1dfe1fd8->leave($__internal_50d2d93d568bc64f8f52fd61c76a11f17d5d36163146de1ee12f3e8e1dfe1fd8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new_email.html.twig";
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

{% block title %}new email{% endblock %}

{% block body %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}


{% endblock %}
", "AppBundle:User:new_email.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/new_email.html.twig");
    }
}
