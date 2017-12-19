<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b62c2a463974e672c3f444e80020993e9e26580fdc9caf0969eee452a8da4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d42188c2417c5c0a42154d350c74a8135763c2312b179cd535921cc856268e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d42188c2417c5c0a42154d350c74a8135763c2312b179cd535921cc856268e2->enter($__internal_7d42188c2417c5c0a42154d350c74a8135763c2312b179cd535921cc856268e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_70985ecf3a93f5ba8003d00dbd6071375a9ccbee0585d25790f2ff6b24eefe03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70985ecf3a93f5ba8003d00dbd6071375a9ccbee0585d25790f2ff6b24eefe03->enter($__internal_70985ecf3a93f5ba8003d00dbd6071375a9ccbee0585d25790f2ff6b24eefe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7d42188c2417c5c0a42154d350c74a8135763c2312b179cd535921cc856268e2->leave($__internal_7d42188c2417c5c0a42154d350c74a8135763c2312b179cd535921cc856268e2_prof);

        
        $__internal_70985ecf3a93f5ba8003d00dbd6071375a9ccbee0585d25790f2ff6b24eefe03->leave($__internal_70985ecf3a93f5ba8003d00dbd6071375a9ccbee0585d25790f2ff6b24eefe03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
