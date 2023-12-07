<?php namespace App\Controllers;

use App\Models\eventmodel;
use CodeIgniter\API\ResponseTrait;

class EventController extends BaseController
{
    public function displayTable_event()
    {
        $event = new eventmodel();

        $data['events'] = $event->findAll(); // Fetch all records from 'events' table

        return view('Pages/Event', $data); // Pass data to the view
    }


    public function index()
    {
        return view('Pages/create_event_form');
    }
    public function displayEvents() {
        $eventsModel = new EventModel();
        $data['events'] = $eventsModel->findAll(); // Assuming you're fetching all events here
    
        return view('Pages/Event', $data);
    }

    use ResponseTrait;

    public function deleteEvent($id = null)
    {
        $eventModel = new eventmodel();
        $event = $eventModel->find($id);

        if ($event) {
            $eventModel->delete($id);
            return $this->respondDeleted(['message' => 'Event has been deleted']);
        } else {
            return $this->failNotFound('Event not found');
        }
    }

 
    public function saveEvent()
    {
        $eventsModel = new eventModel();

        if ($this->request->getMethod() === 'post') {
            $image = $this->request->getFile('image');

         
            $fileName = $image->getName();
    
            $data = [
                'event_name' => $this->request->getVar('event_name'),
                'event_disc' => $this->request->getVar('event_disc'),
                'image' => $fileName,
                'event_date' => $this->request->getVar('event_date'),

            ];

            $eventsModel->insert($data);

            return redirect()->to('/'); 
        }
    }
}
