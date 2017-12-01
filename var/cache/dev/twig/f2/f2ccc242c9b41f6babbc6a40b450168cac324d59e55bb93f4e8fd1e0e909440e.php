<?php

/* AppBundle:User:new_phone.html.twig */
class __TwigTemplate_3a4ac2f0f250ab00d6fe75f38a4f03209a1e599f8ac6684dedf2d228e8043097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:new_phone.html.twig", 1);
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
        $__internal_ca525cb1069518892ac560510fc7d993eaa0228c6cdee5bc7a2926d1a96f6154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca525cb1069518892ac560510fc7d993eaa0228c6cdee5bc7a2926d1a96f6154->enter($__internal_ca525cb1069518892ac560510fc7d993eaa0228c6cdee5bc7a2926d1a96f6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_phone.html.twig"));

        $__internal_0783bb501d33b3dfc96ac76eca0a14c6f6e96a7081569d49a46bc47aaaa09bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0783bb501d33b3dfc96ac76eca0a14c6f6e96a7081569d49a46bc47aaaa09bc8->enter($__internal_0783bb501d33b3dfc96ac76eca0a14c6f6e96a7081569d49a46bc47aaaa09bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:new_phone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca525cb1069518892ac560510fc7d993eaa0228c6cdee5bc7a2926d1a96f6154->leave($__internal_ca525cb1069518892ac560510fc7d993eaa0228c6cdee5bc7a2926d1a96f6154_prof);

        
        $__internal_0783bb501d33b3dfc96ac76eca0a14c6f6e96a7081569d49a46bc47aaaa09bc8->leave($__internal_0783bb501d33b3dfc96ac76eca0a14c6f6e96a7081569d49a46bc47aaaa09bc8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c573a277a2ca90553eeda31687164f46d07ce555063a19fe04b4310d2db14d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c573a277a2ca90553eeda31687164f46d07ce555063a19fe04b4310d2db14d6->enter($__internal_7c573a277a2ca90553eeda31687164f46d07ce555063a19fe04b4310d2db14d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1938440ea544de0a9ff620968cbf52e724d43d0908b4d44fca5a3aae9fd6cfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1938440ea544de0a9ff620968cbf52e724d43d0908b4d44fca5a3aae9fd6cfe7->enter($__internal_1938440ea544de0a9ff620968cbf52e724d43d0908b4d44fca5a3aae9fd6cfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new phone";
        
        $__internal_1938440ea544de0a9ff620968cbf52e724d43d0908b4d44fca5a3aae9fd6cfe7->leave($__internal_1938440ea544de0a9ff620968cbf52e724d43d0908b4d44fca5a3aae9fd6cfe7_prof);

        
        $__internal_7c573a277a2ca90553eeda31687164f46d07ce555063a19fe04b4310d2db14d6->leave($__internal_7c573a277a2ca90553eeda31687164f46d07ce555063a19fe04b4310d2db14d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_46373553b371bbba8ef746e0f82d8312d19c78e5c91b0d3d756d14892df2435a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46373553b371bbba8ef746e0f82d8312d19c78e5c91b0d3d756d14892df2435a->enter($__internal_46373553b371bbba8ef746e0f82d8312d19c78e5c91b0d3d756d14892df2435a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f14aa170a5ba2dba9bed6c03dce9ff002752b1e6dafe084641077fefd0d349b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14aa170a5ba2dba9bed6c03dce9ff002752b1e6dafe084641077fefd0d349b1->enter($__internal_f14aa170a5ba2dba9bed6c03dce9ff002752b1e6dafe084641077fefd0d349b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f14aa170a5ba2dba9bed6c03dce9ff002752b1e6dafe084641077fefd0d349b1->leave($__internal_f14aa170a5ba2dba9bed6c03dce9ff002752b1e6dafe084641077fefd0d349b1_prof);

        
        $__internal_46373553b371bbba8ef746e0f82d8312d19c78e5c91b0d3d756d14892df2435a->leave($__internal_46373553b371bbba8ef746e0f82d8312d19c78e5c91b0d3d756d14892df2435a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:new_phone.html.twig";
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

{% block title %}new phone{% endblock %}

{% block body %}

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}


{% endblock %}", "AppBundle:User:new_phone.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/src/AppBundle/Resources/views/User/new_phone.html.twig");
    }
}
