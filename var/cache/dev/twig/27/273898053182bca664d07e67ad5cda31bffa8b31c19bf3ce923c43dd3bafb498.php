<?php

/* AppBundle:User:modify.html.twig */
class __TwigTemplate_4db9a96ee6a8f59f410063a86cc56d166ef00194e857c35d25ba7c5e0e73c9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:modify.html.twig", 1);
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
        $__internal_4c9c5105ff5821d3959c1fc0e38b5e579338d9d726261f82c107cce5ef2b7428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9c5105ff5821d3959c1fc0e38b5e579338d9d726261f82c107cce5ef2b7428->enter($__internal_4c9c5105ff5821d3959c1fc0e38b5e579338d9d726261f82c107cce5ef2b7428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:modify.html.twig"));

        $__internal_52b710dbb4009873095f157dc11fc5171d583f3713b0dad39c1126266471b456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b710dbb4009873095f157dc11fc5171d583f3713b0dad39c1126266471b456->enter($__internal_52b710dbb4009873095f157dc11fc5171d583f3713b0dad39c1126266471b456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9c5105ff5821d3959c1fc0e38b5e579338d9d726261f82c107cce5ef2b7428->leave($__internal_4c9c5105ff5821d3959c1fc0e38b5e579338d9d726261f82c107cce5ef2b7428_prof);

        
        $__internal_52b710dbb4009873095f157dc11fc5171d583f3713b0dad39c1126266471b456->leave($__internal_52b710dbb4009873095f157dc11fc5171d583f3713b0dad39c1126266471b456_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7dccedb0e04920aa368cf4bd019c1028523f47d5a04f5907984d8ca9c788b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dccedb0e04920aa368cf4bd019c1028523f47d5a04f5907984d8ca9c788b1d->enter($__internal_f7dccedb0e04920aa368cf4bd019c1028523f47d5a04f5907984d8ca9c788b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_441b79ecdbeec52ead207e3f18ced8c594acd9dfa8418b943c5c9e1e96abe0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441b79ecdbeec52ead207e3f18ced8c594acd9dfa8418b943c5c9e1e96abe0fa->enter($__internal_441b79ecdbeec52ead207e3f18ced8c594acd9dfa8418b943c5c9e1e96abe0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "modify user";
        
        $__internal_441b79ecdbeec52ead207e3f18ced8c594acd9dfa8418b943c5c9e1e96abe0fa->leave($__internal_441b79ecdbeec52ead207e3f18ced8c594acd9dfa8418b943c5c9e1e96abe0fa_prof);

        
        $__internal_f7dccedb0e04920aa368cf4bd019c1028523f47d5a04f5907984d8ca9c788b1d->leave($__internal_f7dccedb0e04920aa368cf4bd019c1028523f47d5a04f5907984d8ca9c788b1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b06c0ce93718b629874e93ef35a21802c88593de0025a34ecfb4df0cc47c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b06c0ce93718b629874e93ef35a21802c88593de0025a34ecfb4df0cc47c63->enter($__internal_45b06c0ce93718b629874e93ef35a21802c88593de0025a34ecfb4df0cc47c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7afd5e4cd783df6dde29ac761d95490dd429da2dbd484017a9fee795829b1b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afd5e4cd783df6dde29ac761d95490dd429da2dbd484017a9fee795829b1b4b->enter($__internal_7afd5e4cd783df6dde29ac761d95490dd429da2dbd484017a9fee795829b1b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_addaddress", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">dodaj/edytuj adres</a></div>
    <div><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_addphone", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">dodaj/edytuj telefon</a></div>
    <div><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_user_addemail", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">dodaj/edytuj email</a></div>


";
        
        $__internal_7afd5e4cd783df6dde29ac761d95490dd429da2dbd484017a9fee795829b1b4b->leave($__internal_7afd5e4cd783df6dde29ac761d95490dd429da2dbd484017a9fee795829b1b4b_prof);

        
        $__internal_45b06c0ce93718b629874e93ef35a21802c88593de0025a34ecfb4df0cc47c63->leave($__internal_45b06c0ce93718b629874e93ef35a21802c88593de0025a34ecfb4df0cc47c63_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}modify user{% endblock %}

{% block body %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
    <div><a href=\"{{ path('app_user_addaddress', {'id': user.id})}}\">dodaj/edytuj adres</a></div>
    <div><a href=\"{{ path('app_user_addphone', {'id': user.id})}}\">dodaj/edytuj telefon</a></div>
    <div><a href=\"{{ path('app_user_addemail', {'id': user.id})}}\">dodaj/edytuj email</a></div>


{% endblock %}
", "AppBundle:User:modify.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/modify.html.twig");
    }
}
