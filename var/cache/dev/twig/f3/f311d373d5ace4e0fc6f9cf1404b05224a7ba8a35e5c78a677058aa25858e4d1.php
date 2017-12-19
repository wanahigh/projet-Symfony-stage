<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b615e761bfed31166d09958f6695559bc9e196820eff59d889af7db1bf40ec2 extends Twig_Template
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
        $__internal_5fb6e0042be9189b41a7f9955fdaad43215eb2f74ff285c41dc0bfbaa3227eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb6e0042be9189b41a7f9955fdaad43215eb2f74ff285c41dc0bfbaa3227eec->enter($__internal_5fb6e0042be9189b41a7f9955fdaad43215eb2f74ff285c41dc0bfbaa3227eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a240c7161f4a9e54faa3a3808ac146e40cb7882a3dc0b20006cfb3353f1ab5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a240c7161f4a9e54faa3a3808ac146e40cb7882a3dc0b20006cfb3353f1ab5d6->enter($__internal_a240c7161f4a9e54faa3a3808ac146e40cb7882a3dc0b20006cfb3353f1ab5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5fb6e0042be9189b41a7f9955fdaad43215eb2f74ff285c41dc0bfbaa3227eec->leave($__internal_5fb6e0042be9189b41a7f9955fdaad43215eb2f74ff285c41dc0bfbaa3227eec_prof);

        
        $__internal_a240c7161f4a9e54faa3a3808ac146e40cb7882a3dc0b20006cfb3353f1ab5d6->leave($__internal_a240c7161f4a9e54faa3a3808ac146e40cb7882a3dc0b20006cfb3353f1ab5d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
