# Description
仮想化環境を構築し、お問い合わせフォームを作成しました。

# 開発期間
26時間（環境構築18時間、コーディング8時間）

# 開発環境
Ubuntu 21.10
PHP 8.0.8
Apache 2.4.48
MySQL 8.0.28

# 実装中の問題点
はじめての仮想環境の構築で、かなり時間がかかりました。
VMwareへUbuntuをインストールする際の設定一つ一つにつまづき、
更にコマンドの知識が乏しいため、「コマンドを調べても意味が分からない→調べる」ことを繰り返し、
気づけばかなり時間がかかっている...という状況でした。
環境構築がおわったあともドキュメントルートの権限付与など、
最後までたくさんの問題にぶつかっていました。

# 工夫したところ
入力の必須項目をHTMLのみで記述し、さらに強引な送信を防ぐため正規表現を使って必ず入力するように実装しました。
内容を修正するボタンを押した際に、入力済みの内容が保持されたまま入力画面に戻るようにしました。

# どのような動作テストを行ったか
項目一つずつ空白にし、不備がある状態で送信できるかテストを行いました。

# 参考書籍
PHP超入門

# 参考サイト
Windows10上に仮想Ubuntu環境を構築（VMware Workstation Player）
　https://qiita.com/iwa_gino/items/11aaffa9e49f2fc423d0

Ubuntu 20.04にApache Webサーバーをインストールする方法
　https://tutorialcrawler.com/

UbuntuへのMySQLインストール手順と設定
　https://moewe-net.com/database/mysql-install-on-ubuntu

Linux、Apache、MySQL、PHP(LAMP)スタックをUbuntu 20.04にインストールする方法
　https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-ja

ネコでもわかる！さくらのVPS講座 ～第三回「Apacheをインストールしよう」
　https://knowledge.sakura.ad.jp/8541/

【Ubuntu 20.04 LTS Server】Apache2とPHPを動かす
　https://www.yokoweb.net/2020/08/14/ubuntu-20_04-apache-php/

HTML5 + JavaScriptによるFormバリデーション ~マークアップ編~
　https://liginc.co.jp/345545
