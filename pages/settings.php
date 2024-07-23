<?php
$socials = themeGetSocials();
$contacts = themeGetContacts();
?>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Your title</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="user_title" id="" placeholder="Copywriter" value="<?= settings('r', 'agent_one.user_title') ?>">
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Tag line</div>
        <input class="border border-gray-400 rounded-lg w-full"name="tag_line" id="" placeholder="Cool short line about your brand"<?= settings('r', 'agent_one.tag_line') ?>>
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Bio</div>
        <textarea class="border border-gray-400 rounded-lg w-full"name="user_bio" id="" placeholder="Short description of yourself and services"><?= settings('r', 'agent_one.user_bio') ?></textarea>
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Call to action text</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="cta_text" id="" placeholder="Book me" value="<?= settings('r', 'agent_one.cta_text') ?>">
    </label>
</div>

<?php
foreach ($contacts as $contact => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $contact ?>" id="" value="<?= settings('r', 'agent_one.'.$contact) ?>">
    </label>
</div>
<?php
}

foreach ($socials as $social => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $social ?>" id="" value="<?= settings('r', 'agent_one.'.$social) ?>">
    </label>
</div>
<?php
}
