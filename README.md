# Behat With Appium ![pw](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

<p align="center">
<img height="500" src="https://user-images.githubusercontent.com/70570645/171988795-ed884ca8-f431-48b3-afcc-91a014fd5059.png">
</p>

<p align="center">
  <a href="https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat" target="_bank">Blog</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat" target="_bank">Docs</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat" target="_bank">Learning Hub</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/newsletter/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat" target="_bank">Newsletter</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/certifications/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat" target="_bank">Certifications</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.youtube.com/c/LambdaTest" target="_bank">YouTube</a>
</p>
&emsp;
&emsp;
&emsp;

_Appium is a tool for automating native, mobile web, and hybrid applications on iOS, Android, and Windows platforms. It supports iOS native apps written in Objective-C or Swift and Android native apps written in Java or Kotlin. It also supports mobile web apps accessed using a mobile browser (Appium supports Safari on iOS and Chrome or the built-in 'Browser' app on Android). Perform Appium automation tests on [LambdaTest's online cloud](https://www.lambdatest.com/appium-mobile-testing?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)._

_Learn the basics of [Appium testing on the LambdaTest platform](https://www.lambdatest.com/support/docs/getting-started-with-appium-testing/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)._

[<img height="53" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)

## Table of Contents

- [Pre-requisites](#pre-requisites)
- [Run Your First Test](#run-your-first-test)
- [Executing The Tests](#executing-the-tests)

## Pre-requisites

Before you begin automation testing with Appium, you would need to follow these steps:

### Clone The Sample Project

Clone the LambdaTest’s :link: [LT-appium-php-behat](https://github.com/LambdaTest/LT-appium-php-behat) repository and navigate to the code directory as shown below:

```bash
git clone https://github.com/LambdaTest/LT-appium-php-behat
cd LT-appium-php-behat
```

### Installing Project Dependencies

<details>

<summary id="summary_2"> <strong>Install PHP (latest)</strong> </summary>

Download and install the latest version of PHP in your system.

**MacOS:** Previous versions of **MacOS** have **PHP** installed by default. But for the latest **MacOS** versions starting with **Monterey**, **PHP** has to be downloaded and installed manually by using below commands:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
brew install php
```

**Linux:**

```bash
sudo apt-get install curl libcurl3 libcurl3-dev php
```

**Windows:** You can download **PHP** from [here](http://windows.php.net/download/). Also, refer to this [documentation](http://php.net/manual/en/install.windows.php) for ensuring the accessibility of PHP through Command Prompt(cmd).

Please add php to Windows System Variables PATH.

</details>

<details>

<summary id="summary_2"> <strong>Download Composer in the project directory</strong>
</summary>

1. Download **composer** in the project directory from here ([Linux/MacOS](https://getcomposer.org/download/), [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)).

**Tip Note:**

To use the **composer** command directly, it should have been downloaded in the project directory. In windows the composer gets installed in different directory. So, copy the 'composer.phar' to the project directory using copy command:

```php
copy C:\ProgramData\ComposerSetup\bin\composer.phar
```

2. Install the composer and behat dependencies in the current project directory using the commands below:

```php
composer update
php composer.phar require behat/behat
```
In case of any error, please try restarting.

</details>

### Setting Up Your Authentication

Make sure you have your LambdaTest credentials with you to run test automation scripts on LambdaTest. To obtain your access credentials, [purchase a plan](https://billing.lambdatest.com/billing/plans?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat) or access the [Automation Dashboard](https://appautomation.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat).

Set LambdaTest `Username` and `Access Key` in environment variables.

**For Linux/macOS:**

```js
export LT_USERNAME=YOUR_LAMBDATEST_USERNAME \
export LT_ACCESS_KEY=YOUR_LAMBDATEST_ACCESS_KEY
```

**For Windows:**

```js
set LT_USERNAME=YOUR_LAMBDATEST_USERNAME `
set LT_ACCESS_KEY=YOUR_LAMBDATEST_ACCESS_KEY
```

### Upload Your Application

Upload your **_iOS_** application (.ipa file) or **_android_** application (.apk file) to the LambdaTest servers using our **REST API**. You need to provide your **Username** and **AccessKey** in the format `Username:AccessKey` in the **cURL** command for authentication. Make sure to add the path of the **appFile** in the cURL request. Here is an example cURL request to upload your app using our REST API:

**Using App File:**

**For Linux/macOS:**

```js
curl -u "YOUR_LAMBDATEST_USERNAME:YOUR_LAMBDATEST_ACCESS_KEY" \
--location --request POST 'https://manual-api.lambdatest.com/app/upload/realDevice' \
--form 'name="Android_App"' \
--form 'appFile=@"/Users/macuser/Downloads/proverbial_android.apk"'
```

**For Windows:**

```js
curl -u "YOUR_LAMBDATEST_USERNAME:YOUR_LAMBDATEST_ACCESS_KEY" -X POST "https://manual-api.lambdatest.com/app/upload/realDevice" -F "appFile=@"/Users/macuser/Downloads/proverbial_android.apk""
```

**Using App URL:**

**For Linux/macOS:**

```js
curl -u "YOUR_LAMBDATEST_USERNAME:YOUR_LAMBDATEST_ACCESS_KEY" \
--location --request POST 'https://manual-api.lambdatest.com/app/upload/realDevice' \
--form 'name="Android_App"' \
--form 'url="https://prod-mobile-artefacts.lambdatest.com/assets/docs/proverbial_android.apk"'
```

**For Windows:**

```js
curl -u "YOUR_LAMBDATEST_USERNAME:YOUR_LAMBDATEST_ACCESS_KEY" -X POST "https://manual-api.lambdatest.com/app/upload/realDevice" -d "{"url":"https://prod-mobile-artefacts.lambdatest.com/assets/docs/proverbial_android.apk","name":"sample.apk"}"
```

**Tip:**

- If you do not have any **.apk** or **.ipa** file, you can run your sample tests on LambdaTest by using our sample :link: [Android app](https://prod-mobile-artefacts.lambdatest.com/assets/docs/proverbial_android.apk) or sample :link: [iOS app](https://prod-mobile-artefacts.lambdatest.com/assets/docs/proverbial_ios.ipa).
- Response of above cURL will be a **JSON** object containing the `App URL` of the format - <lt://APP123456789123456789> and will be used in the next step.

## Run Your First Test

**Test Scenario:** Check out [FeatureContext.php](https://github.com/LambdaTest/LT-appium-php-behat/blob/master/features/bootstrap/FeatureContext.php) file to view the sample test script.

### Configuring Your Test Capabilities

You can update your custom capabilities in test scripts. In this sample project, we are passing platform name, platform version, device name and app url (generated earlier) along with other capabilities like build name and test name via capabilities object. The capabilities object in the sample code are defined as:

<Tabs className="docs__val">

<TabItem value="androidsingle-config" label="Android Single" default>

```php title="androidsingle.conf.yml"
     capabilities:
      build: "behat-appium-sample"
      name: "single-behat-test"
      isRealMobile: true
      app: "lt://proverbial-android"  //Enter your app url here
    environments:
      -
      deviceName: Galaxy S21 Ultra 5G
      platform: Android
      platformVersion: 11
```

</TabItem>
<TabItem value="iossingle-config" label="iOS Single" default>

```php title="iossingle.conf.yml"
  capabilities:
    build: "behat-appium-ios"
    name: "single-behat-test"
    isRealMobile: true
    app: "lt://proverbial-ios"    #Add app url here
  environments:
    -
    deviceName: iPhone 11
    platform: ios
    platformVersion: 14
```

</TabItem>

</Tabs>

**Info Note:**

- You must add the generated **APP_URL** to the `"app"` capability in the config file.
- You can generate capabilities for your test requirements with the help of our inbuilt **[Capabilities Generator tool](https://www.lambdatest.com/capabilities-generator/beta/index.html?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)**. A more Detailed Capability Guide is available [here](https://www.lambdatest.com/support/docs/desired-capabilities-in-appium/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat).

### Executing The Tests

Execute the following command to run your test on LambdaTest platform:

**IOS:**

```bash
composer iossingle   #for single tests
composer iosparallel  #for parallel tests
```

**Android:**

```bash
composer androidsingle   #for single tests
composer androidparallel  #for parallel tests
```

**Info:** Your test results would be displayed on the test console (or command-line interface if you are using terminal/cmd) and on the :link: [LambdaTest App Automation Dashboard](https://appautomation.lambdatest.com/build?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat).

## Additional Links

- [Advanced Configuration for Capabilities](https://www.lambdatest.com/support/docs/desired-capabilities-in-appium/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)
- [How to test locally hosted apps](https://www.lambdatest.com/support/docs/testing-locally-hosted-pages/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)
- [How to integrate LambdaTest with CI/CD](https://www.lambdatest.com/support/docs/integrations-with-ci-cd-tools/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)

## Documentation & Resources :books:

Visit the following links to learn more about LambdaTest's features, setup and tutorials around test automation, mobile app testing, responsive testing, and manual testing.

- [LambdaTest Documentation](https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)
- [LambdaTest Blog](https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)
- [LambdaTest Learning Hub](https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)

## LambdaTest Community :busts_in_silhouette:

The [LambdaTest Community](https://community.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat) allows people to interact with tech enthusiasts. Connect, ask questions, and learn from tech-savvy people. Discuss best practises in web development, testing, and DevOps with professionals from across the globe 🌎

## What's New At LambdaTest ❓

To stay updated with the latest features and product add-ons, visit [Changelog](https://changelog.lambdatest.com/)

## About LambdaTest

[LambdaTest](https://www.lambdatest.com?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat) is a leading test execution and orchestration platform that is fast, reliable, scalable, and secure. It allows users to run both manual and automated testing of web and mobile apps across 3000+ different browsers, operating systems, and real device combinations. Using LambdaTest, businesses can ensure quicker developer feedback and hence achieve faster go to market. Over 500 enterprises and 1 Million + users across 130+ countries rely on LambdaTest for their testing needs.

### Features

- Run Selenium, Cypress, Puppeteer, Playwright, and Appium automation tests across 3000+ real desktop and mobile environments.
- Real-time cross browser testing on 3000+ environments.
- Test on Real device cloud
- Blazing fast test automation with HyperExecute
- Accelerate testing, shorten job times and get faster feedback on code changes with Test At Scale.
- Smart Visual Regression Testing on cloud
- 120+ third-party integrations with your favorite tool for CI/CD, Project Management, Codeless Automation, and more.
- Automated Screenshot testing across multiple browsers in a single click.
- Local testing of web and mobile apps.
- Online Accessibility Testing across 3000+ desktop and mobile browsers, browser versions, and operating systems.
- Geolocation testing of web and mobile apps across 53+ countries.
- LT Browser - for responsive testing across 50+ pre-installed mobile, tablets, desktop, and laptop viewports

[<img height="53" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)

## We are here to help you :headphones:

- Got a query? we are available 24x7 to help. [Contact Us](mailto:support@lambdatest.com)
- For more info, visit - [LambdaTest](https://www.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=LT-appium-php-behat)