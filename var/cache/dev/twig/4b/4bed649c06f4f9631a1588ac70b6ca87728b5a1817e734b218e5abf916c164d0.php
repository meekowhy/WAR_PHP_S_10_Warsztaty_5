<?php

/* AppBundle:User:delete.html.twig */
class __TwigTemplate_7349b8bafce7eb00ca00efd683279b441c4f8f22233b876417d8cb549a4b55f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:delete.html.twig", 1);
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
        $__internal_3d2ad60348ed7f8abf47e741d739dbf9474d837c9f33da4933fa067c5ce4212d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2ad60348ed7f8abf47e741d739dbf9474d837c9f33da4933fa067c5ce4212d->enter($__internal_3d2ad60348ed7f8abf47e741d739dbf9474d837c9f33da4933fa067c5ce4212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:delete.html.twig"));

        $__internal_029277e4ce74bd767e5118633069623f1a09b01ee72ee12a28333a4073e173c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029277e4ce74bd767e5118633069623f1a09b01ee72ee12a28333a4073e173c8->enter($__internal_029277e4ce74bd767e5118633069623f1a09b01ee72ee12a28333a4073e173c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2ad60348ed7f8abf47e741d739dbf9474d837c9f33da4933fa067c5ce4212d->leave($__internal_3d2ad60348ed7f8abf47e741d739dbf9474d837c9f33da4933fa067c5ce4212d_prof);

        
        $__internal_029277e4ce74bd767e5118633069623f1a09b01ee72ee12a28333a4073e173c8->leave($__internal_029277e4ce74bd767e5118633069623f1a09b01ee72ee12a28333a4073e173c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74290fa3375507fc6de917bc42e3c084339764b7ea04cad0bc5f20ccacabf2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74290fa3375507fc6de917bc42e3c084339764b7ea04cad0bc5f20ccacabf2ae->enter($__internal_74290fa3375507fc6de917bc42e3c084339764b7ea04cad0bc5f20ccacabf2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2907c5811249a18dff2df0ffb88a5511fc4de525bb47d39ceed914564ccda9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2907c5811249a18dff2df0ffb88a5511fc4de525bb47d39ceed914564ccda9f1->enter($__internal_2907c5811249a18dff2df0ffb88a5511fc4de525bb47d39ceed914564ccda9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:User:delete";
        
        $__internal_2907c5811249a18dff2df0ffb88a5511fc4de525bb47d39ceed914564ccda9f1->leave($__internal_2907c5811249a18dff2df0ffb88a5511fc4de525bb47d39ceed914564ccda9f1_prof);

        
        $__internal_74290fa3375507fc6de917bc42e3c084339764b7ea04cad0bc5f20ccacabf2ae->leave($__internal_74290fa3375507fc6de917bc42e3c084339764b7ea04cad0bc5f20ccacabf2ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e63251564f6e4407b77d0035724cdb6e7ebbab59168a2599883260793356461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e63251564f6e4407b77d0035724cdb6e7ebbab59168a2599883260793356461->enter($__internal_3e63251564f6e4407b77d0035724cdb6e7ebbab59168a2599883260793356461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a208159140a1f8aa49d0f4fab32f371052c1249b048fa44c6e1c2aeca0b9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a208159140a1f8aa49d0f4fab32f371052c1249b048fa44c6e1c2aeca0b9b2->enter($__internal_f1a208159140a1f8aa49d0f4fab32f371052c1249b048fa44c6e1c2aeca0b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:delete page</h1>
";
        
        $__internal_f1a208159140a1f8aa49d0f4fab32f371052c1249b048fa44c6e1c2aeca0b9b2->leave($__internal_f1a208159140a1f8aa49d0f4fab32f371052c1249b048fa44c6e1c2aeca0b9b2_prof);

        
        $__internal_3e63251564f6e4407b77d0035724cdb6e7ebbab59168a2599883260793356461->leave($__internal_3e63251564f6e4407b77d0035724cdb6e7ebbab59168a2599883260793356461_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:User:delete{% endblock %}

{% block body %}
<h1>Welcome to the User:delete page</h1>
{% endblock %}
", "AppBundle:User:delete.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/delete.html.twig");
    }
}
