<?php

$full_version = '';
if (isset($_GET['version'])){
    $full_version = $_GET['version'];
}

if (!preg_match('/\A[0-9]+\.[0-9]+\z/',$full_version)) {
    echo('Please assign version.<br/>For example /CentOS-Current-Vault.php?version=6.5');
    exit;
}
$versionArr = explode('.',$full_version);
$major = $versionArr[0];
$minor = $versionArr[1];
?>
[C<?php echo $full_version; ?>-base]
name=CentOS-<?php echo $full_version; ?> - Base
baseurl=http://vault.centos.org/<?php echo $full_version; ?>/os/$basearch/
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-<?php echo $major;?>
enabled=1

[C<?php echo $full_version; ?>-updates]
name=CentOS-<?php echo $full_version; ?> - Updates
baseurl=http://vault.centos.org/<?php echo $full_version; ?>/updates/$basearch/
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-<?php echo $major;?>
enabled=1

