<?php

namespace Application\SodaCard;
use Domain\SodaCard;
use Domain\User;

class Create
{

    /**
     * @var SodaCard\Repository
     */
    private $sodaCardRepository;

    /**
     * Create constructor.
     * @param SodaCard\Repository $sodaCardRepository
     */
    public function __construct(SodaCard\Repository $sodaCardRepository)
    {
        $this->sodaCardRepository = $sodaCardRepository;
    }

    public function __invoke(CreateRequest $request)
    {
        $password = $request->getEmail();
        $password_confirmation = $request->getEmail();

        $slack_username = $request->getSlackUsername();
        $card_uid = "";

        $custom_fields = json_encode(array('slack_username' => $slack_username, 'card_uid' => $card_uid));

        $user = new User(
            $request->getEmail(),
            $request->getFirstName(),
            $request->getLastName(),
            $password,
            $password_confirmation,
            $custom_fields
        );

        $sodaCard = new SodaCard($user);

        $this->sodaCardRepository->save($sodaCard);

    }

}