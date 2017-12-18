<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
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
        $__internal_217f84347af5a6a5cc3ac5a6611c6ca7b1b5284a4724d9e278efab547467276a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217f84347af5a6a5cc3ac5a6611c6ca7b1b5284a4724d9e278efab547467276a->enter($__internal_217f84347af5a6a5cc3ac5a6611c6ca7b1b5284a4724d9e278efab547467276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e88196046bd67e09c8ebc201d4debc418cf2fa32021ac69aeb8c65e6c59df78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88196046bd67e09c8ebc201d4debc418cf2fa32021ac69aeb8c65e6c59df78c->enter($__internal_e88196046bd67e09c8ebc201d4debc418cf2fa32021ac69aeb8c65e6c59df78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_217f84347af5a6a5cc3ac5a6611c6ca7b1b5284a4724d9e278efab547467276a->leave($__internal_217f84347af5a6a5cc3ac5a6611c6ca7b1b5284a4724d9e278efab547467276a_prof);

        
        $__internal_e88196046bd67e09c8ebc201d4debc418cf2fa32021ac69aeb8c65e6c59df78c->leave($__internal_e88196046bd67e09c8ebc201d4debc418cf2fa32021ac69aeb8c65e6c59df78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
