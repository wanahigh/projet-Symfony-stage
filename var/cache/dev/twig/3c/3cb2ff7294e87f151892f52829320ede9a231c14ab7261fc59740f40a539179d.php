<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4291de23864f18e5a85a9c40961d0415471b7a3e013e4027720693ba5b2a5a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4291de23864f18e5a85a9c40961d0415471b7a3e013e4027720693ba5b2a5a18->enter($__internal_4291de23864f18e5a85a9c40961d0415471b7a3e013e4027720693ba5b2a5a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a7074da9ec83bdbc9f31450d2edf8700718fbcc0c377e364e6e0d70292a13c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7074da9ec83bdbc9f31450d2edf8700718fbcc0c377e364e6e0d70292a13c4b->enter($__internal_a7074da9ec83bdbc9f31450d2edf8700718fbcc0c377e364e6e0d70292a13c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4291de23864f18e5a85a9c40961d0415471b7a3e013e4027720693ba5b2a5a18->leave($__internal_4291de23864f18e5a85a9c40961d0415471b7a3e013e4027720693ba5b2a5a18_prof);

        
        $__internal_a7074da9ec83bdbc9f31450d2edf8700718fbcc0c377e364e6e0d70292a13c4b->leave($__internal_a7074da9ec83bdbc9f31450d2edf8700718fbcc0c377e364e6e0d70292a13c4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_964e5085faf96e6fc0f3bfe5f80a7cc55f0562ae5845788f6af6027e5c0295fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964e5085faf96e6fc0f3bfe5f80a7cc55f0562ae5845788f6af6027e5c0295fb->enter($__internal_964e5085faf96e6fc0f3bfe5f80a7cc55f0562ae5845788f6af6027e5c0295fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd3089b208549c3dd7113f05e4c91ad682885d1abe8604b4c6b083dcab254df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3089b208549c3dd7113f05e4c91ad682885d1abe8604b4c6b083dcab254df6->enter($__internal_cd3089b208549c3dd7113f05e4c91ad682885d1abe8604b4c6b083dcab254df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd3089b208549c3dd7113f05e4c91ad682885d1abe8604b4c6b083dcab254df6->leave($__internal_cd3089b208549c3dd7113f05e4c91ad682885d1abe8604b4c6b083dcab254df6_prof);

        
        $__internal_964e5085faf96e6fc0f3bfe5f80a7cc55f0562ae5845788f6af6027e5c0295fb->leave($__internal_964e5085faf96e6fc0f3bfe5f80a7cc55f0562ae5845788f6af6027e5c0295fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_770770599b46deb375c1e4c7e7a444493e445c04228e8b50cc192f27716db7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770770599b46deb375c1e4c7e7a444493e445c04228e8b50cc192f27716db7e0->enter($__internal_770770599b46deb375c1e4c7e7a444493e445c04228e8b50cc192f27716db7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da2fb21040a2f6294af03d149773dbba5799752a605350ab8f7e111f57e945c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2fb21040a2f6294af03d149773dbba5799752a605350ab8f7e111f57e945c5->enter($__internal_da2fb21040a2f6294af03d149773dbba5799752a605350ab8f7e111f57e945c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da2fb21040a2f6294af03d149773dbba5799752a605350ab8f7e111f57e945c5->leave($__internal_da2fb21040a2f6294af03d149773dbba5799752a605350ab8f7e111f57e945c5_prof);

        
        $__internal_770770599b46deb375c1e4c7e7a444493e445c04228e8b50cc192f27716db7e0->leave($__internal_770770599b46deb375c1e4c7e7a444493e445c04228e8b50cc192f27716db7e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
