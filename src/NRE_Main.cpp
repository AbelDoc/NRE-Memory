    
    /**
     * @file NRE_Main.cpp
     * @brief Test of Memory's API
     * @author Louis ABEL
     * @date 14/03/2020
     * @copyright CC-BY-NC-SA
     */

    #include <iostream>
    #include "Header/NRE_Memory.hpp"
    #include "Header/NRE_Utility.hpp"

    using namespace NRE::Memory;
    using namespace NRE::Utility;
    
    class MemoryManager  : public Singleton<MemoryManager> {
        friend class Singleton<MemoryManager>;
        
        private:    // Fields
            Vector<void*> allocated;   /**< Store all allocated pointer */
            
        public :    // Methods
            void storeMemory(void* data) {
                allocated.emplaceBack(data);
            }
            void removeMemory(void* data) {
                allocated.erase(std::remove(allocated.begin(), allocated.end(), data), allocated.end());
            }

        private:   // Methods
            //## Constructor ##//
                /**
                 * Default constructor
                 */
                MemoryManager() = default;
        
            //## Deconstructor ##//
                /**
                 * MemoryManager Deconstructor
                 */
                ~MemoryManager() {
                    for (void* p : allocated) {
                        std::cout << "Memory at : " << p << " has not been freed !" << std::endl;
                        //std::cout << "Deallocating now, but can't call deconstructor !" << std::endl;
                        //delete p;
                    }
                }
    };
    
    
    void* operator new(std::size_t size) {
        std::cout << "New" << std::endl;
        void* data = malloc(size);
        Singleton<MemoryManager>::get().storeMemory(data);
        return data;
    }
    
    void operator delete(void* p) {
        std::cout << "Delete" << std::endl;
        Singleton<MemoryManager>::get().removeMemory(p);
        free(p);
    }
    
    void operator delete(void* p, std::size_t) {
        std::cout << "Delete" << std::endl;
        Singleton<MemoryManager>::get().removeMemory(p);
        free(p);
    }
    
    int main(int, char**) {
        DirectAllocator<int> a;
        
        auto p = a.allocate(1);
        a.construct(p, 1234);
        
        std::cout << *p << std::endl;
        
        a.destroy(p);
        a.deallocate(p, 1);
        
        return 0;
    }