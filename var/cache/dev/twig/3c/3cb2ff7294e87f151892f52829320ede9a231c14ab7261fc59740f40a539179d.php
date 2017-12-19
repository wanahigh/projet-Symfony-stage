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
        $__internal_b1f02bc7d72c2bcc30a6cacb490f085ff99cd01c300439003e6cbbcfeebe477b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f02bc7d72c2bcc30a6cacb490f085ff99cd01c300439003e6cbbcfeebe477b->enter($__internal_b1f02bc7d72c2bcc30a6cacb490f085ff99cd01c300439003e6cbbcfeebe477b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5268f64cb506b2c7ea5984edaed3ed2a13464e8cd1e97b4246686961b2b14e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5268f64cb506b2c7ea5984edaed3ed2a13464e8cd1e97b4246686961b2b14e83->enter($__internal_5268f64cb506b2c7ea5984edaed3ed2a13464e8cd1e97b4246686961b2b14e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f02bc7d72c2bcc30a6cacb490f085ff99cd01c300439003e6cbbcfeebe477b->leave($__internal_b1f02bc7d72c2bcc30a6cacb490f085ff99cd01c300439003e6cbbcfeebe477b_prof);

        
        $__internal_5268f64cb506b2c7ea5984edaed3ed2a13464e8cd1e97b4246686961b2b14e83->leave($__internal_5268f64cb506b2c7ea5984edaed3ed2a13464e8cd1e97b4246686961b2b14e83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd076bebc5ad1f7cbbd6e3fe0a159d0892206926c5ea5decde7235a8a038acd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd076bebc5ad1f7cbbd6e3fe0a159d0892206926c5ea5decde7235a8a038acd9->enter($__internal_dd076bebc5ad1f7cbbd6e3fe0a159d0892206926c5ea5decde7235a8a038acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9e67cd0cee230cf6ce4cd3af7087910d480dcdbb00f9c246600f9ac7752980e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e67cd0cee230cf6ce4cd3af7087910d480dcdbb00f9c246600f9ac7752980e->enter($__internal_c9e67cd0cee230cf6ce4cd3af7087910d480dcdbb00f9c246600f9ac7752980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9e67cd0cee230cf6ce4cd3af7087910d480dcdbb00f9c246600f9ac7752980e->leave($__internal_c9e67cd0cee230cf6ce4cd3af7087910d480dcdbb00f9c246600f9ac7752980e_prof);

        
        $__internal_dd076bebc5ad1f7cbbd6e3fe0a159d0892206926c5ea5decde7235a8a038acd9->leave($__internal_dd076bebc5ad1f7cbbd6e3fe0a159d0892206926c5ea5decde7235a8a038acd9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_401a347e083a2c47d59f09974f0c706259fbf2b3ebd64e11c285e405cd0b367b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401a347e083a2c47d59f09974f0c706259fbf2b3ebd64e11c285e405cd0b367b->enter($__internal_401a347e083a2c47d59f09974f0c706259fbf2b3ebd64e11c285e405cd0b367b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e199c535ded05d083c8f5fb66391f245b60ab843b13e153cc834e58443f55960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e199c535ded05d083c8f5fb66391f245b60ab843b13e153cc834e58443f55960->enter($__internal_e199c535ded05d083c8f5fb66391f245b60ab843b13e153cc834e58443f55960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e199c535ded05d083c8f5fb66391f245b60ab843b13e153cc834e58443f55960->leave($__internal_e199c535ded05d083c8f5fb66391f245b60ab843b13e153cc834e58443f55960_prof);

        
        $__internal_401a347e083a2c47d59f09974f0c706259fbf2b3ebd64e11c285e405cd0b367b->leave($__internal_401a347e083a2c47d59f09974f0c706259fbf2b3ebd64e11c285e405cd0b367b_prof);

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
