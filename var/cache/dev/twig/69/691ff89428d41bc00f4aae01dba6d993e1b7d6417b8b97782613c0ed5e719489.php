<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f5de655ec9b716f973a6c72cc00ee386b00c59de52a752d52522d8dcd429a9d extends Twig_Template
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
        $__internal_b47e1126810f8b1e3ee27bb2fb8df81ef3755e68deef9b883ef42921e4887d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47e1126810f8b1e3ee27bb2fb8df81ef3755e68deef9b883ef42921e4887d78->enter($__internal_b47e1126810f8b1e3ee27bb2fb8df81ef3755e68deef9b883ef42921e4887d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_66cb388778b163ecf9020bc32f83c71fdfcf6aeb67b318f62c14afcd318ff0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cb388778b163ecf9020bc32f83c71fdfcf6aeb67b318f62c14afcd318ff0a6->enter($__internal_66cb388778b163ecf9020bc32f83c71fdfcf6aeb67b318f62c14afcd318ff0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b47e1126810f8b1e3ee27bb2fb8df81ef3755e68deef9b883ef42921e4887d78->leave($__internal_b47e1126810f8b1e3ee27bb2fb8df81ef3755e68deef9b883ef42921e4887d78_prof);

        
        $__internal_66cb388778b163ecf9020bc32f83c71fdfcf6aeb67b318f62c14afcd318ff0a6->leave($__internal_66cb388778b163ecf9020bc32f83c71fdfcf6aeb67b318f62c14afcd318ff0a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
