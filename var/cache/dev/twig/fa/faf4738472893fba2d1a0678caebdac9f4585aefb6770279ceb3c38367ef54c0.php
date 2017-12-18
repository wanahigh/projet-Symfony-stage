<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fea366a6e6ea40873f70ebdc4182fddc4a73c9db5a72706ff8b614b54e8aa012 extends Twig_Template
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
        $__internal_a375eb52c9417baab6511b5641257e94baa4e72f36e360f25575f52b0fc061e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a375eb52c9417baab6511b5641257e94baa4e72f36e360f25575f52b0fc061e2->enter($__internal_a375eb52c9417baab6511b5641257e94baa4e72f36e360f25575f52b0fc061e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_40fe60078d6f2cc94ce3dfe61a3c2b5d4688f767c2d49b9b809d139d21fcb0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fe60078d6f2cc94ce3dfe61a3c2b5d4688f767c2d49b9b809d139d21fcb0b4->enter($__internal_40fe60078d6f2cc94ce3dfe61a3c2b5d4688f767c2d49b9b809d139d21fcb0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a375eb52c9417baab6511b5641257e94baa4e72f36e360f25575f52b0fc061e2->leave($__internal_a375eb52c9417baab6511b5641257e94baa4e72f36e360f25575f52b0fc061e2_prof);

        
        $__internal_40fe60078d6f2cc94ce3dfe61a3c2b5d4688f767c2d49b9b809d139d21fcb0b4->leave($__internal_40fe60078d6f2cc94ce3dfe61a3c2b5d4688f767c2d49b9b809d139d21fcb0b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
