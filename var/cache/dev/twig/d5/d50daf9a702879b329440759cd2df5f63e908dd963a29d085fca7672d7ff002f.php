<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e6def5d283c7b0d3c2f6d145fe24878db5aac479fa3974963bcb40a89d46fa05 extends Twig_Template
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
        $__internal_f17d94230005f8e57a510c97520835ccbe2c7189c91a48c8089203b932cf16cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17d94230005f8e57a510c97520835ccbe2c7189c91a48c8089203b932cf16cb->enter($__internal_f17d94230005f8e57a510c97520835ccbe2c7189c91a48c8089203b932cf16cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a5edb1d7d8822f3ec1b866fe08cb3b2573dfe6eab51ee1f353c6747f361b055e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5edb1d7d8822f3ec1b866fe08cb3b2573dfe6eab51ee1f353c6747f361b055e->enter($__internal_a5edb1d7d8822f3ec1b866fe08cb3b2573dfe6eab51ee1f353c6747f361b055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f17d94230005f8e57a510c97520835ccbe2c7189c91a48c8089203b932cf16cb->leave($__internal_f17d94230005f8e57a510c97520835ccbe2c7189c91a48c8089203b932cf16cb_prof);

        
        $__internal_a5edb1d7d8822f3ec1b866fe08cb3b2573dfe6eab51ee1f353c6747f361b055e->leave($__internal_a5edb1d7d8822f3ec1b866fe08cb3b2573dfe6eab51ee1f353c6747f361b055e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
