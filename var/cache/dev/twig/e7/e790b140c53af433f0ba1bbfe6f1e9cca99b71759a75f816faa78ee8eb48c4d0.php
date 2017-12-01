<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_578f14e1da7b2b80df3760fdccced6faa033bb7a3e52ecd6127a910f43e640f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a16b2991a00ce198a11f9998f654722213858c2259aa40706dedaa2bff2bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a16b2991a00ce198a11f9998f654722213858c2259aa40706dedaa2bff2bb5->enter($__internal_62a16b2991a00ce198a11f9998f654722213858c2259aa40706dedaa2bff2bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_f75e40d3c31ae11211377b8019b08dba4df7feb24519bed7fd9a6326dd195891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75e40d3c31ae11211377b8019b08dba4df7feb24519bed7fd9a6326dd195891->enter($__internal_f75e40d3c31ae11211377b8019b08dba4df7feb24519bed7fd9a6326dd195891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_62a16b2991a00ce198a11f9998f654722213858c2259aa40706dedaa2bff2bb5->leave($__internal_62a16b2991a00ce198a11f9998f654722213858c2259aa40706dedaa2bff2bb5_prof);

        
        $__internal_f75e40d3c31ae11211377b8019b08dba4df7feb24519bed7fd9a6326dd195891->leave($__internal_f75e40d3c31ae11211377b8019b08dba4df7feb24519bed7fd9a6326dd195891_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c09d59c4192b75a576cba7f3534980f5e89820ee6695c350569b98d9d7b614cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09d59c4192b75a576cba7f3534980f5e89820ee6695c350569b98d9d7b614cf->enter($__internal_c09d59c4192b75a576cba7f3534980f5e89820ee6695c350569b98d9d7b614cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e72339645b40e2b9d66c4fd6b2067a8227960fa89877c13e7bab5caab69b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e72339645b40e2b9d66c4fd6b2067a8227960fa89877c13e7bab5caab69b841->enter($__internal_8e72339645b40e2b9d66c4fd6b2067a8227960fa89877c13e7bab5caab69b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "            <style>
                ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
            </style>
        ";
        
        $__internal_8e72339645b40e2b9d66c4fd6b2067a8227960fa89877c13e7bab5caab69b841->leave($__internal_8e72339645b40e2b9d66c4fd6b2067a8227960fa89877c13e7bab5caab69b841_prof);

        
        $__internal_c09d59c4192b75a576cba7f3534980f5e89820ee6695c350569b98d9d7b614cf->leave($__internal_c09d59c4192b75a576cba7f3534980f5e89820ee6695c350569b98d9d7b614cf_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c699441a5c68c41cfb34e5f7503c129da4544e0b575937383f08c66912f22bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c699441a5c68c41cfb34e5f7503c129da4544e0b575937383f08c66912f22bd->enter($__internal_8c699441a5c68c41cfb34e5f7503c129da4544e0b575937383f08c66912f22bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4caa0f9bdf3f79374c9bcc9ad9ceb7cc7c53a01fde79ba17583b6bc655fa02a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caa0f9bdf3f79374c9bcc9ad9ceb7cc7c53a01fde79ba17583b6bc655fa02a3->enter($__internal_4caa0f9bdf3f79374c9bcc9ad9ceb7cc7c53a01fde79ba17583b6bc655fa02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_4caa0f9bdf3f79374c9bcc9ad9ceb7cc7c53a01fde79ba17583b6bc655fa02a3->leave($__internal_4caa0f9bdf3f79374c9bcc9ad9ceb7cc7c53a01fde79ba17583b6bc655fa02a3_prof);

        
        $__internal_8c699441a5c68c41cfb34e5f7503c129da4544e0b575937383f08c66912f22bd->leave($__internal_8c699441a5c68c41cfb34e5f7503c129da4544e0b575937383f08c66912f22bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 12,  70 => 11,  61 => 10,  49 => 18,  47 => 17,  43 => 15,  41 => 10,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        {% block head %}
            <style>
                {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/base.html.twig");
    }
}
