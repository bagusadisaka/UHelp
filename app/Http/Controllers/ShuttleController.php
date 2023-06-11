<?php

namespace App\Http\Controllers;
use App\Models\Shuttle;
use App\Http\Requests\StoreShuttleRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateShuttleRequest;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverWait;

class ShuttleController extends Controller
{
    public function savedata(Request $request){
        $destinationFrom = $request->input('destination_from');
        $destinationTo = $request->input('destination_to');
        $departureTime = $request->input('departure_time');

         // Create a new instance of your model and set the attributes
        $model = new Shuttle(); // Replace 'YourModel' with the actual model name
        $model->destination_from = $destinationFrom;
        $model->destination_to = $destinationTo;
        $model->departure_time = $departureTime;

    // Save the model to the database
        $model->save();
    }



    public function routingawal()
    {
        $host = 'http://localhost:4444/wd/hub'; // Selenium server URL
        $capabilities = DesiredCapabilities::chrome(); // or any other browser
        $driver = RemoteWebDriver::create($host, $capabilities);

        $driver->get('https://forms.gle/dKcynjUvbwggiQdx5');
        $wait = new WebDriverWait($driver, 60);

        $inputElement = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('whsOnd'))
        );
        $inputElement->sendKeys("Alogha@gmail.com");

        $nextButton = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('NPEfkd'))
        );
        $nextButton->click();

        $woke = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::className('AB7Lab'))
        );
        $woke->click();

        $nextButton2 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton2->click();

        $tanggalan = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::cssSelector('input[type="date"].whsOnd.zHQkBf'))
        );
        $tanggalan->sendKeys('10-05-2022');

        $nextButton3 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton3->click();

        $BinusianId = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[1]'))
        );
        $BinusianId->sendKeys("Aloha America");

        $Namaku = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[2]'))
        );
        $Namaku->sendKeys("Kaneki ken");

        $Unit = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[3]'))
        );
        $Unit->sendKeys("Beban Binus");

        $option1 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="W gabut"]'))
        );
        $option1->click();

        $telpon = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('(//input[@type="text"])[5]'))
        );
        $telpon->sendKeys("088888888");

        $harinya = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Senin"]'))
        );
        $harinya->click();

        $nextButton4 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Berikutnya')]"))
        );
        $nextButton4->click();

        $jam1 = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Jam 2"]'))
        );
        $jam1->click();

        $turundi = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath('//div[@aria-label="Binus Alsut"]'))
        );
        $turundi->click();

        $Finish = $wait->until(
            WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("//span[contains(text(),'Kirim')]"))
        );
        $Finish->click();

        // $driver->quit();
    }
}
