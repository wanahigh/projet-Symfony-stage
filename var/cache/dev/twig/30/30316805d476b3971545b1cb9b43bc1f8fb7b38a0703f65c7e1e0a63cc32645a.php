<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
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
        $__internal_257fdf9d4bab28b638efadbca65ba2397408bffb9c0eef8d39828ab7e23c3973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257fdf9d4bab28b638efadbca65ba2397408bffb9c0eef8d39828ab7e23c3973->enter($__internal_257fdf9d4bab28b638efadbca65ba2397408bffb9c0eef8d39828ab7e23c3973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e80020b46f0f0b517e56db93c3402ef3619b2e4f713308e87684bfdd1fe8bfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80020b46f0f0b517e56db93c3402ef3619b2e4f713308e87684bfdd1fe8bfca->enter($__internal_e80020b46f0f0b517e56db93c3402ef3619b2e4f713308e87684bfdd1fe8bfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_257fdf9d4bab28b638efadbca65ba2397408bffb9c0eef8d39828ab7e23c3973->leave($__internal_257fdf9d4bab28b638efadbca65ba2397408bffb9c0eef8d39828ab7e23c3973_prof);

        
        $__internal_e80020b46f0f0b517e56db93c3402ef3619b2e4f713308e87684bfdd1fe8bfca->leave($__internal_e80020b46f0f0b517e56db93c3402ef3619b2e4f713308e87684bfdd1fe8bfca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
