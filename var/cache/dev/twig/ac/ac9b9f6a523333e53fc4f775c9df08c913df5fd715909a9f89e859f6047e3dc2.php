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
        $__internal_2efe46c2efa9ddf7dab1b4e55b891a9a18f3c02052290db2eb12348a27c7a25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efe46c2efa9ddf7dab1b4e55b891a9a18f3c02052290db2eb12348a27c7a25c->enter($__internal_2efe46c2efa9ddf7dab1b4e55b891a9a18f3c02052290db2eb12348a27c7a25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7c383fdc31efd74b5c3a378e0bd9772c0111f821c7410b2a87ad7495a855e5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c383fdc31efd74b5c3a378e0bd9772c0111f821c7410b2a87ad7495a855e5b4->enter($__internal_7c383fdc31efd74b5c3a378e0bd9772c0111f821c7410b2a87ad7495a855e5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2efe46c2efa9ddf7dab1b4e55b891a9a18f3c02052290db2eb12348a27c7a25c->leave($__internal_2efe46c2efa9ddf7dab1b4e55b891a9a18f3c02052290db2eb12348a27c7a25c_prof);

        
        $__internal_7c383fdc31efd74b5c3a378e0bd9772c0111f821c7410b2a87ad7495a855e5b4->leave($__internal_7c383fdc31efd74b5c3a378e0bd9772c0111f821c7410b2a87ad7495a855e5b4_prof);

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
