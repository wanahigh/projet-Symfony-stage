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
        $__internal_71fdc334838dfbe9934da418c77410f5f07e253e78792a14dc6ff710368f429b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fdc334838dfbe9934da418c77410f5f07e253e78792a14dc6ff710368f429b->enter($__internal_71fdc334838dfbe9934da418c77410f5f07e253e78792a14dc6ff710368f429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6dfde432af003eda03ec1df3350167b2331b521b28f6dfc35941b2e73dab64b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfde432af003eda03ec1df3350167b2331b521b28f6dfc35941b2e73dab64b9->enter($__internal_6dfde432af003eda03ec1df3350167b2331b521b28f6dfc35941b2e73dab64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_71fdc334838dfbe9934da418c77410f5f07e253e78792a14dc6ff710368f429b->leave($__internal_71fdc334838dfbe9934da418c77410f5f07e253e78792a14dc6ff710368f429b_prof);

        
        $__internal_6dfde432af003eda03ec1df3350167b2331b521b28f6dfc35941b2e73dab64b9->leave($__internal_6dfde432af003eda03ec1df3350167b2331b521b28f6dfc35941b2e73dab64b9_prof);

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
