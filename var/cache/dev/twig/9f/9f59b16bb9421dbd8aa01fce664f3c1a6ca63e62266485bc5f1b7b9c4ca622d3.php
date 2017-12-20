<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_62b8a723da0e14649e14c99bbf3f3dc95824e29bd9b9d04e73548f3db6182a8c extends Twig_Template
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
        $__internal_f33bb7cc77e6b72c857263f4d8b3cf3febcacf296109ad80501a8842ec586b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33bb7cc77e6b72c857263f4d8b3cf3febcacf296109ad80501a8842ec586b15->enter($__internal_f33bb7cc77e6b72c857263f4d8b3cf3febcacf296109ad80501a8842ec586b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_855aa62108402f2336764cc7376d0d1aa1fb42b22cb63dc324a1ee22626df4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855aa62108402f2336764cc7376d0d1aa1fb42b22cb63dc324a1ee22626df4be->enter($__internal_855aa62108402f2336764cc7376d0d1aa1fb42b22cb63dc324a1ee22626df4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f33bb7cc77e6b72c857263f4d8b3cf3febcacf296109ad80501a8842ec586b15->leave($__internal_f33bb7cc77e6b72c857263f4d8b3cf3febcacf296109ad80501a8842ec586b15_prof);

        
        $__internal_855aa62108402f2336764cc7376d0d1aa1fb42b22cb63dc324a1ee22626df4be->leave($__internal_855aa62108402f2336764cc7376d0d1aa1fb42b22cb63dc324a1ee22626df4be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
