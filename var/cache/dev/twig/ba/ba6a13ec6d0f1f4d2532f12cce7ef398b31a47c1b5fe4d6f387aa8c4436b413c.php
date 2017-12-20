<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_9fce6532fb3962bcc5530923082c64ae742de3bd90e64313777284f141f60c57 extends Twig_Template
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
        $__internal_540d390184ba49688459696fb4f70709af1857f5a700ee032c9c572efd7a317c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540d390184ba49688459696fb4f70709af1857f5a700ee032c9c572efd7a317c->enter($__internal_540d390184ba49688459696fb4f70709af1857f5a700ee032c9c572efd7a317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_92e5c865cb8ce85023def5d2cca854fa802b56a2549f3470db3e5dabae928703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e5c865cb8ce85023def5d2cca854fa802b56a2549f3470db3e5dabae928703->enter($__internal_92e5c865cb8ce85023def5d2cca854fa802b56a2549f3470db3e5dabae928703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_540d390184ba49688459696fb4f70709af1857f5a700ee032c9c572efd7a317c->leave($__internal_540d390184ba49688459696fb4f70709af1857f5a700ee032c9c572efd7a317c_prof);

        
        $__internal_92e5c865cb8ce85023def5d2cca854fa802b56a2549f3470db3e5dabae928703->leave($__internal_92e5c865cb8ce85023def5d2cca854fa802b56a2549f3470db3e5dabae928703_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
