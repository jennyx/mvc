<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
    #[Route("/api/quote", name:"quote")]
    public function jsonNumber(): Response
    {
        $data = [
            '1' => 'Life is like riding a bicycle. To keep your balance you must keep moving. - Albert Einstein',
            '2' => 'Imagination is more important than knowledge. - Albert Einstein',
            '3' => 'The important thing is not to stop questioning. Curiosity has its own reason for existing. - Albert Einstein',
            '4' => 'Failure is success in progress. - Albert Einstein',
            '5' => 'The only source of knowledge is experience. - Albert Einstein',
            '6' => 'Learn from yesterday, live for today, hope for tomorrow. - Albert Einstein'
        ];

        $randomNbr = random_int(1, count($data));
        $quote = $data[$randomNbr];
        $date = date("d-m-o H:i:s");
        $print = $date . " " . $quote;

        $response = new JsonResponse($print);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
